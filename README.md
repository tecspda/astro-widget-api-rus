Astrology widget API RUS
======
[![GitHub issues](https://img.shields.io/github/issues/tecspda/astro-widget-api-rus.svg)](https://github.com/tecspda/astro-widget-api-rus/issues)
[![GitHub forks](https://img.shields.io/github/forks/tecspda/astro-widget-api-rus.svg)](https://github.com/tecspda/astro-widget-api-rus/network)
[![GitHub stars](https://img.shields.io/github/stars/tecspda/astro-widget-api-rus.svg)](https://github.com/tecspda/astro-widget-api-rus/stargazers)
[![Twitter](https://img.shields.io/twitter/url/https/github.com/tecspda/astro-widget-api-rus.svg?label=astro-widget-api-rus&style=social)](https://twitter.com/intent/tweet?text=Horoscope%20API:&url=https%3A%2F%2Fgithub.com%tecspda%2Fastro-widget-api-rus)

An API to extract horoscope, moon phases and days, planet notes, aspect notes.

![Widget Moon haircut](https://astrolog.life/api/git_review/img/example_small.svg)![Widget Moon haircut](https://astrolog.life/api/git_review/img/example_moon_day_note1.svg)

![Widget Moon day](https://astrolog.life/api/git_review/img/example_day_html.svg)

![Widget Moon phases on custom period](https://astrolog.life/api/git_review/img/example_moon_phases_period450.svg)

## Table of Contents

* [Features](#features)
* [Usage](#api-usage)
* [Todo](#todo)
* [Contributing](#contributing)

# Features

* __Moon haircut calendar__
  * `html format`
  * `calendar by month`
  * `calendar and detail all days in month`
* __Moon day (now, custom date)__
  * `html format, phase, persent of visible, icon `
  * `Moon day`
  * `Moon day with icons and style`
* __Moon phases calendar__ 
  * `json, html, text formats`
* __Moon in Zodiac__
  * `json, html, text formats`
* __Moon without course__
  * `2021-2022 year, json` 
  
  
# API Usage

### GET Moon haircut calendar
**Example**
```html
GET: https://astrolog.life/api/api_get_moon.php?moon_type=X&year=Y&month=M&dot_shift=Z&id=A
```
| Params |  | Value |
| ------ | ------ | ------ |
| moon_type | X | `haircut_small` or **haircut_full** |
| year | Y | digit (2020 etc.) |
| month | M | digit (from 1 until 12) |
| dot_shift | Z | Optional, mean shift of color point |
| id | A | Required, your api key |

| Examples | Link |
| ------ | ------ |
| Sep 2021, small calendar | [api_get_moon.php?moon_type=haircut_small&year=2021&month=09&dot_shift=10&id=5fd7d97bb3f26](https://astrolog.life/api/api_get_moon.php?moon_type=haircut_small&year=2021&month=9&dot_shift=10&id=5fd7d97bb3f26)|
| Sep 2021, small calendar and detail for all days | [api_get_moon.php?moon_type=haircut_full&year=2021&month=9&dot_shift=10&id=5fd7d97bb3f26](https://astrolog.life/api/api_get_moon.php?moon_type=haircut_full&year=2021&month=9&dot_shift=10&id=5fd7d97bb3f26)|

##### Example result:

![Widget Moon haircut](https://astrolog.life/api/git_review/img/example_small.svg)![Widget Moon haircut](https://astrolog.life/api/git_review/img/example_moon_day_note1.svg)

<hr>

### GET Moon day
```html
GET: https://astrolog.life/api/api_get_moon_day.php?type=[string]&date=[string]&time=[string]&tzone=[string]&ext=[string]&id=[string]
```
##### Example 1 (only number of Moon day)
| Examples | Link |
| ------ | ------ |
| Example1 | [api_get_moon_day.php?type=day&date=2021-09-01&time=17:43&tzone=GMT+3&ext=num&id=5fd7d97bb3f26](https://astrolog.life/api/api_get_moon_day.php?type=day&date=2021-09-08&time=17:43&tzone=GMT+3&ext=num&id=5fd7d97bb3f26)|
| Example1 | [api_get_moon_day.php?type=day&date=2021-09-01&time=17:43&tzone=GMT+3&ext=html&id=5fd7d97bb3f26](https://astrolog.life/api/api_get_moon_day.php?type=day&date=201-09-08&time=17:43&tzone=GMT+3&ext=html&id=5fd7d97bb3f26)|

| Params | Value | Note |
| ------ | ------ | ------ |
| type | `day` | default Now() |
| date | `2021-09-08` | it's mean 08 Sep 2021, default Now() |
| time | `17:43` or `17:43:05` | default Now() |
| tzone | `GMT+1` or `GMT+5` etc. | default `UCT+3` MSK Russia |
| ext | `num` or `html` | default `html` |
| id | A | Optional, your api key |

##### Example `ext = num` result:

```html
22
```
##### Example `ext = html` result:

![Widget Moon day](https://astrolog.life/api/git_review/img/example_day_html.svg)

<hr>

### GET Moon day today (now)
```html
GET: https://astrolog.life/api/api_get_moon_day.php?type=[string]&date=[string]&time=[string]&tzone=[string]&ext=[string]&id=[string]
```
##### Example 1 (only number of Moon day)
| Examples | Link |
| ------ | ------ |
| Example1 | [api_get_moon_day.php?type=now&tzone=GMT+3&ext=num&id=5fd7d97bb3f26](https://astrolog.life/api/api_get_moon_day.php?type=now&tzone=GMT+3&ext=num&id=5fd7d97bb3f26)|
| Example1 | [api_get_moon_day.php?type=now&tzone=GMT+3&ext=html&id=5fd7d97bb3f26](https://astrolog.life/api/api_get_moon_day.php?type=now&tzone=GMT+3&ext=html&id=5fd7d97bb3f26)|

| Params | Value |
| ------ | ------ |
| type | `now` |
| tzone | `GMT+1` or `GMT+5` etc., default `GMT+3` MSK Russia |
| ext | `num` or `html`, default `html` |
| id | Optional, your api key |

##### Example ext=num result:

```html
23
```
##### Example ext=html result:

![Widget Moon day](https://astrolog.life/api/git_review/img/example_day_html.svg)

<hr>

### GET Moon phases calendar
**Example**
```html
GET: https://astrolog.life/api/api_get_moon_day.php?type=phaselist&date_start=X&date_stop=Y&id=A
```
| Params |  | Value |
| ------ | ------ | ------ |
| date_start | X | format `2020-12-01` |
| date_stop | Y | format `2020-12-01` |
| with_percent | Z | optional, default `0`, `1` - for show percent of visible |
| id | A | Required, your api key |

| Examples | Link |
| ------ | ------ |
| Phases Dec 2020 - Jan 2021 | [api_get_moon_day.php?type=phaselist&date_start=2020-12-01&date_stop=2021-01-31&id=5fd7d97bb3f26](https://astrolog.life/api/api_get_moon_day.php?type=phaselist&date_start=2020-12-01&date_stop=2021-01-31&id=5fd7d97bb3f26)|


##### Example result:

![Widget Moon phases on custom period](https://astrolog.life/api/git_review/img/example_moon_phases_period450.svg)

<hr>

### GET Moon in zodiac table
**Example**
```html
GET: https://astrolog.life/api/api_get_moon.php?moon_type=in_sign&date1=X&date2=Y&id=A
```
| Params |  | Value |
| ------ | ------ | ------ |
| date_start | X | format `2021-9-01` |
| date_stop | Y | format `2021-10-01` |
| id | A | Optional, your api key |

| Examples | Link |
| ------ | ------ |
| Table Jan 2021 | [api_get_moon.php?moon_type=in_sign&date1=2021-9-01&date2=2021-11-31](https://astrolog.life/api/api_get_moon.php?moon_type=in_sign&date1=2021-9-01&date2=2021-11-30)|


##### Example result:

![Widget Moon phases on custom period](https://astrolog.life/api/git_review/img/example_moon_inzodiac_table.svg)

<hr>

### GET Moon without course
**Fixed files on Github:**
```html
GET: https://github.com/tecspda/astro-widget-api-rus/tree/master/json/moon_no_course
```
##### Example result:
```json
[
 {
   "year": 2021,
   "month": 11,
   "day": 1,
   "start_gmt3": "2021-11-01 20:00:00 UTC",
   "end_gmt3": "2021-11-01 02:11:00 UTC",
   "start_format": "2021-11-01T20:00:00",
   "end_format": "2021-11-01T02:11:00"
 },
 {
   "year": 2021,
   "month": 11,
   "day": 4,
   "start_gmt3": "2021-11-04 01:32:00 UTC",
   "end_gmt3": "2021-11-04 03:52:00 UTC",
   "start_format": "2021-11-04T01:32:00",
   "end_format": "2021-11-04T03:52:00"
 }
]
```


### Optional API key for your site:
`https://astrolog.life/api`
```html
It will take 10 seconds. 
Result: 5fd7d962129fb
```



# Todo
* Json output for all

# API Wrappers 
* Native html & CSS
* **No js**, **No JQuery** etc = no conflict style and engine
* Minimal CSS style (without heavy CSS properties)

# Contributing
Feel free to submit a pull request or an issue!



__Note 1__: This API is free (but limit 1000 requests per Month or 100 requests per day). ID KEY is not required until 15 Jan 2021. 

__Note 2__: If the API goes down, please open a issue or comment on existing one with the problem(s) that you are facing. This is the best way to let me know that the API is not working, avoid sending email. 

__Note 3__: You can try - `https://astrolog.life/api` which has a commercial license and more features (custom styles, output in json, different language etc).  

