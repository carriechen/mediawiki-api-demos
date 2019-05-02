<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/bb/MediaWiki-notext.svg/500px-MediaWiki-notext.svg.png" height="200px" alt="MediaWiki"/>

# MediaWiki Action API Code Samples
The [MediaWiki Action API](https://www.mediawiki.org/wiki/API:Main_page) is a web service that allows access to some wiki-features like authentication, page operations, and search. It can provide meta information about the wiki and the logged-in user.

This repository contains demo apps and code snippets in Python and Javascript to assist developers for easy use of various modules of the API: 
* [Python](python/)
* [Javascript](javascript/)

### Apps
* [Article ideas generator](apps/article-ideas-generator):
Demo app that suggests articles from various categories that don't yet exist on English Wikipedia. The app uses [Parse](https://www.mediawiki.org/wiki/API:Parse) and [Links](https://www.mediawiki.org/wiki/API:Links) module.
* [Nearby places viewer](apps/nearby-places-viewer):
Demo of geo search for wiki pages near a location using the [Geolocation API](https://developer.mozilla.org/en-US/docs/Web/API/Geolocation_API) and MediaWiki Action API's [Geosearch](https://www.mediawiki.org/wiki/API:Geosearch) module.
* [Picture of the day viewer](apps/picture-of-the-day-viewer):
Demo app that uses [prop=images](https://www.mediawiki.org/wiki/API:Images) module to fetch Wikipedia's Picture of the Day (POTD) from a template page and displays it on a webpage. The app also allows users to go backward or forward a date to view other POTD.
* [User contributions feed](apps/user-contributions-feed):
Demp app that uses [list=usercontribs](https://www.mediawiki.org/wiki/API:Usercontribs) module to fetch the top 50 edits made by a user.

### Installation
```
$ git clone https://github.com/wikimedia/MediaWiki-Action-API-Code-Samples.git
$ cd MediaWiki-Action-API-Code-Samples

For running python code samples: 
$ cd python
$ python3 filename.py 
Note: Install any necessary python modules with pip and enter any credentials 
required in the file to run the sample code

For running javascript code samples:
$ cd javascript
$ node filename.js
Note: Install any necessary node modules with npm and enter any credentials required
in the file to run the sample code
```

### Contributing code samples
If you would like to contribute a demo that you have built or a sample code that you have identified as missing for an API module documentation on MediaWiki.org, first create an issue in this repository. 

If the repo contributors or maintainers agree that the proposed sample code or demo app would be a useful addition to this repository, go ahead and start working on the issue. Send a pull request when you have your changes ready to be accepted or merged! 

Follow the instructions below to create a pull request: 
```
$ git pull origin master
This makes sure that your master branch is up to date

$ git checkout -b BRANCHNAME origin/master
This will create a new branch (BRANCHNAME) from the latest 'master' and check it out for you. 

$ git add filename
$ git commit -m "your commit message"
Make and commit your changes

$ git pull --rebase origin master
Rebase your changes against master

$ git push origin BRANCHNAME
Push your changes and create a pull request 
Learn more: https://help.github.com/en/articles/creating-a-pull-request
```

For GET requests modules _only_, python and javascript sample code can be auto-generated by following the instructions below:
```
$ cd MediaWiki-Action-API-Code-Samples
Add module information to `modules.json`
$ python autogenerator.py
Make desired changes to the newly generated file(s)
```
