![](https://img.shields.io/badge/-Horoscope%20API-blueviolet.svg)

Astrology widget API RUS
======
[![GitHub issues](https://img.shields.io/github/issues/tapaswenipathak/astro-widget-api-rus.svg)](https://github.com/tecspda/astro-widget-api-rus/issues)
[![GitHub forks](https://img.shields.io/github/forks/tapaswenipathak/astro-widget-api-rus.svg)](https://github.com/tecspda/astro-widget-api-rus/network)
[![GitHub stars](https://img.shields.io/github/stars/tapaswenipathak/astro-widget-api-rus.svg)](https://github.com/tecspda/astro-widget-api-rus/stargazers)
[![GitHub license](https://img.shields.io/github/license/tapaswenipathak/astro-widget-api-rus.svg)](https://github.com/tecspda/astro-widget-api-rus/blob/master/License.md)
[![Twitter](https://img.shields.io/twitter/url/https/github.com/tapaswenipathak/astro-widget-api-rus.svg?label=astro-widget-api-rus&style=social)](https://twitter.com/intent/tweet?text=Horoscope%20API:&url=https%3A%2F%2Fgithub.com%2Ftapaswenipathak%2Fastro-widget-api-rus)

An API to extract horoscope.

## Table of Contents

* [Features](#features)
* [Usage](#api-usage)
* [Todo](#todo)
* [Contributing](#contributing)

# Features

* Moon haircut calendar 
  * only calendar by month.
  * calendar and detail all days in month.
* Moon off course calendar
  * calendar by month with color mark.
* Natal
  * Natal img.
  * Plantets in Zodiak note.
  * Planets params note.
  * Gradus note.
  * Warning: important gradus note.
  
# API Usage
###### API Test URL: `https://astrolog.life/api/testwork.php`

Result :
```json
{
  "author": "Sergey Durmanov", 
  "author_url": "https://astrolog.life/", 
  "base_url": "https://astrolog.life/api/", 
  "project_name": "Astrology API RUS", 
  "project_url": "http://tecspda.github.io/astro-widget-api-rus"
}
```

## GET MOON HAIRCUT CALENDAR
###### GET: `https://astrolog.life/api/api_get_moon.php?<moon_type>=haircut_full&month=1-12&dot_shift=XX(not requery)`
###### Example
Example usage: `GET https://astrolog.life/api/api_get_moon.php?moon_type=haircut_small&month=12&&dot_shift=10`
[link](https://astrolog.life/api/api_get_moon.php?moon_type=haircut_small&month=12&&dot_shift=10)

Params
- moon_type = haircut_small
- month = 12


Example result:

![Widget Moon haircut](https://astrolog.life/api/git_review/img/example_small.svg)

## GET MOON HAIRCUT CALENDAR & DAY DETAILS
###### GET: `https://astrolog.life/api/api_get_moon.php?<moon_type>=haircut_full&month=1-12&dot_shift=XX(not requery)`
###### Example
Example usage: `GET https://astrolog.life/api/api_get_moon.php?moon_type=haircut_small&month=12&&dot_shift=10`

Example url: <https://astrolog.life/api/api_get_moon.php?moon_type=haircut_small&month=12&&dot_shift=10>

Example result:

![Widget Moon haircut](https://astrolog.life/api/git_review/img/example_small.svg)

### GET: `/horoscope/week/<sunsign>`
#### Example
Example usage: `GET http://astro-widget-api-rus.herokuapp.com/horoscope/week/libra`

Output (excerpt):
```json
{
  "horoscope": "  Be prepared to face a hectic week, says Ganesha. Things that were dormant shall now start gaining momentum. Your financial graph will gradually start going up. Things on both the personal and professional fronts are likely to become smoother. Your relations with your bosses shall improve. Boss and You! Finding difficulty to get along with your superior in your office, our expert astrologers can help you out. Get this report to get guidance from an astrological standpoint \u2013 as this report is based on your Natal Chart, it will be fully personalised for you. You shall be spending money on friends, but they shall return the favour by holding you in high regard and showering a lot of affection on you. This week, you shall also be able to earn through contacts and your reputation shall spread through word of mouth, fetching many assignments. This week is good for working with youngsters. That is to say, if you wish to impart training to the youngsters in your company or even in your family, this is the best week. Ganesha feels your approach towards social and personal issues shall be diplomatic.   Birth Horoscope Use the power of Astrology to understand yourself in a better way and get a sense of direction and purpose in life. The cosmic imprint of the stars has a profound impact on your life. Unravel your true potential through the Birth Horoscope report, being offered for free.      Get It Now! ", 
  "sunsign": "libra", 
  "week": "31-08-2014 \u2013 06-09-2014 "
}
```


# Todo
* Personality Profile
* Facts About a Sunsign
* Practical Side of a Sunsign
* Astrological Perspective of a Sunsign

# API Wrappers 
* [Java Wrapper](https://github.com/TheBotBox/astro-widget-api-rus) by [TheBotBox](https://github.com/TheBotBox/) 
* [Flutter Wrapper](https://github.com/sumitgohil/flutter_horoscope) by [SumitGohil](https://github.com/sumitgohil/) 

# Contributing
Feel free to submit a pull request or an issue!



#### Note 1 : This parses [GaneshaSpeaks](http://www.ganeshaspeaks.com/) unofficialy.  

#### Note 2 : If the API goes down, please open a issue or comment on already existing one with the problem(s) that you are facing. This is the best way to let me know that the API is not working, avoid sending email. 

#### Note 3 : You can also try - https://horoscopesapi.com which has a commercial license and more features.

[![Bitdeli Badge](https://d2weczhvl823v0.cloudfront.net/tapasweni-pathak/astro-widget-api-rus/trend.png)](https://bitdeli.com/free "Bitdeli Badge")
