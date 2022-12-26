# Interview Project
## _Weather App_

Create web application which shows web page with a form containing an edit box for entering city name.
Once city name is entered, application shall display weather (temperature, precipitation, wind) for specified city.
Weather data shall be taken from database.
Application should be able to handle city name input errors of the following types:
* Missing letter (Lodon)
* Redundant letter (Loondon)
* Wrong letter (Lomdon)
* Misplaced letter (Lodnon)

And autocorrect these errors in attempt to find valid city name(s) existing in DB.
If more than one city matches entered string, weather for all of them shall be displayed.
As deliverables we expect only source code, DB schema and DB migration scripts with some test data
Please don’t use any frameworks. You can use standard PHP libraries. For UI you can use PHP and/or JS.

## License
GNU General Public License v3.0