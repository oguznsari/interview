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

## Create mock-data on MySQL database
```sh
CREATE DATABASE weather;

create table weather.weather
(
    id            int auto_increment,
    city          TEXT                   not null,
    degrees       DOUBLE                 not null,
    precipitation DOUBLE                 not null,
    humidity      DOUBLE                 not null,
    wind          int                    not null,
    status        VARCHAR(50)                    ,
    updated_at    DATETIME default NOW() not null,
    created_at    DATETIME default NOW() not null,
    constraint weather_pk
        primary key (id)
);

USE weather;

INSERT INTO weather (city, degrees, precipitation, humidity, wind, status)
VALUES ('ISTANBUL', 35.1, 2.7, 45.2, 5, "Sunny");
INSERT INTO weather (city, degrees, precipitation, humidity, wind, status)
VALUES ('LONDON', 2.0, 60.8, 78.4, 8, "Rainy");
INSERT INTO weather (city, degrees, precipitation, humidity, wind, status)
VALUES ('NEW YORK', 0.9, 40.0, 46.5, 9, "Snow");
INSERT INTO weather (city, degrees, precipitation, humidity, wind, status)
VALUES ('SYDNEY', 35.2, 15.0, 63.5, 1, "Sunny");
INSERT INTO weather (city, degrees, precipitation, humidity, wind, status)
VALUES ('CHICAGO', 1.5, 35.0, 15.8, 15, "Snow");
INSERT INTO weather (city, degrees, precipitation, humidity, wind, status)
VALUES ('ROME', 32.2, 12.3, 15.3, 3, "Sunny");
INSERT INTO weather (city, degrees, precipitation, humidity, wind, status)
VALUES ('TOKYO', 12.5, 40.2, 50.4, 6, "Rainy");
INSERT INTO weather (city, degrees, precipitation, humidity, wind, status)
VALUES ('PARIS', 24.4, 30.1, 61.2, 4, "Cloudly");
INSERT INTO weather (city, degrees, precipitation, humidity, wind, status)
VALUES ('HONG KONG', 30.8, 10.3, 56.6, 0, "Sunny");
INSERT INTO weather (city, degrees, precipitation, humidity, wind, status)
VALUES ('DUBAI', 50.8, 15.1, 78.0, 1, "Sunny");

```


### To do:
- City at the top uçur
- May remove submit button and make form look nicer
- add JS frontend backend API structure
- catch it in backend & return reponse
- maybe return json and handle UI frontend js.
- available cities should be returned from backend for the tip
- add router structure
- backend frontend JSON structure