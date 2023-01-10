## _Weather App_

Weather app: make cards, retrieve conditions via API

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
## DB Schema
![weatherschema](https://user-images.githubusercontent.com/33628345/210004498-fc0f0d65-becc-4677-ac30-3bf4168474a3.png)


### To do:
- City at the top uçur
- May remove submit button and make form look nicer
- add JS frontend backend API structure
- catch it in backend & return reponse
- maybe return json and handle UI frontend js.
- available cities should be returned from backend for the tip
- add router structure
- backend frontend JSON structure

## Example
![image](https://user-images.githubusercontent.com/33628345/209971954-1c4f6ff0-092b-4a2d-97d5-2d8a96f3e608.png)
