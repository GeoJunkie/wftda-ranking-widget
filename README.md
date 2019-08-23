# wftda-ranking-widget
 The future home of a rankings widget using the WFTDA stats API.

**This is a development project right now. Please don't use it on live sites yet!**

**This plugin was developed by a roller derby referee, fan, and league member. It isn't approved of, endorsed, or part of the Women's Flat Track Derby Association (WFTDA). I just made this to meet a need in my own league and wanted to share it.**

 Initially, this widget will scrape the data from http://stats.wftda.com/league/{league}. Once an API is available, it will use that API.

 This will also have measures in place to ensure we don't overload the stats site (**Not implemented yet**):
 * We won't use live stats unless and until the API has a good way to do that
 * Rankings for each league will be stored locally when first retrieved and then refreshed only if the data is over 24 hours old
