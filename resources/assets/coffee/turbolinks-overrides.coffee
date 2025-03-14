# Copyright (c) ppy Pty Ltd <contact@ppy.sh>. Licensed under the GNU Affero General Public License v3.0.
# See the LICENCE file in the repository root for full licence text.

# Anchor navigation with turbolinks. Works around [1].
# [1] https://github.com/turbolinks/turbolinks/issues/75
$(document).on 'click', 'a[href^="#"]', (e) ->
  link = e.currentTarget

  return if link.dataset.toggle == 'collapse'

  href = link.href
  targetId = decodeURIComponent href[href.indexOf('#') + 1..]

  return if targetId == ''

  target = document.getElementById targetId

  return if !target?

  e.preventDefault()
  # still behaves weird in cases where push/popping state wouldn't normally result in a scroll.
  Turbolinks.controller.advanceHistory href
  target.scrollIntoView()


# Monkey patch Turbolinks to render 403, 404, and 500 normally
# Reference: https://github.com/turbolinks/turbolinks/issues/179
Turbolinks.HttpRequest::requestLoaded = ->
  @endRequest =>
    if 200 <= @xhr.status < 300 || @xhr.status in [401, 403, 404, 500]
      @delegate.requestCompletedWithResponse(@xhr.responseText, @xhr.getResponseHeader("Turbolinks-Location"))
    else
      @failed = true
      @delegate.requestFailedWithStatusCode(@xhr.status, @xhr.responseText)


# may or may not actually work
Turbolinks.Controller::advanceHistory = (url) ->
  return if url == _exported.currentUrl().href

  snapshot = @view.getSnapshot()
  location = @lastRenderedLocation
  @cache.put location, snapshot.clone()
  @lastRenderedLocation = Turbolinks.Location.wrap(url)
  @pushHistoryWithLocationAndRestorationIdentifier url, Turbolinks.uuid()


# Ignore anchor check on loading snapshot to prevent repeating requesting page
# when the target doesn't exist.
Turbolinks.Snapshot::hasAnchor = -> true

Turbolinks.Controller::locationIsVisitable = (location) ->
  location.isPrefixedBy(@view.getRootLocation()) && _exported.OsuUrlHelper.isInternal(location) && _exported.OsuUrlHelper.isHTML(location)
