Astrology widget API RUS
======
[![GitHub issues](https://img.shields.io/github/issues/tapaswenipathak/astro-widget-api-rus.svg)](https://github.com/tecspda/astro-widget-api-rus/issues)
[![GitHub forks](https://img.shields.io/github/forks/tapaswenipathak/astro-widget-api-rus.svg)](https://github.com/tecspda/astro-widget-api-rus/network)
[![GitHub stars](https://img.shields.io/github/stars/tapaswenipathak/astro-widget-api-rus.svg)](https://github.com/tecspda/astro-widget-api-rus/stargazers)
[![Twitter](https://img.shields.io/twitter/url/https/github.com/tapaswenipathak/astro-widget-api-rus.svg?label=astro-widget-api-rus&style=social)](https://twitter.com/intent/tweet?text=Horoscope%20API:&url=https%3A%2F%2Fgithub.com%2Ftapaswenipathak%2Fastro-widget-api-rus)

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

* Moon haircut calendar 
  * only calendar by month.
  * calendar and detail all days in month.
* Moon day (now, custom date)
  * Moon day only
  * Moon day with icons and style
* Moon phases caledar
* Moon in Zodiac
* Natal (start in Dec 2020, now testing)
  * Natal img.
  * Plantets in Zodiak note.
  * Planets params note.
  * Degree note.
  * Warning: important degree note.
  
**Notice**: all html result style = inline-block. 
  
# API Usage
### Create API key for your site: `https://astrolog.life/api`

```html
It will take 10 seconds. 
Result: 5fd7d962129fb
```
<hr>

## GET Moon haircut calendar
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
| Dec 2020, small calendar | [api_get_moon.php?moon_type=haircut_small&year=2020&month=12&dot_shift=10&id=5fd7d97bb3f26](https://astrolog.life/api/api_get_moon.php?moon_type=haircut_small&year=2020&month=12&dot_shift=10&id=5fd7d97bb3f26)|
| Dec 2020, small calendar and detail for all days | [api_get_moon.php?moon_type=haircut_full&year=2020&month=12&dot_shift=10&id=5fd7d97bb3f26](https://astrolog.life/api/api_get_moon.php?moon_type=haircut_full&year=2020&month=12&dot_shift=10&id=5fd7d97bb3f26)|

Example result:

![Widget Moon haircut](https://astrolog.life/api/git_review/img/example_small.svg)![Widget Moon haircut](https://astrolog.life/api/git_review/img/example_moon_day_note1.svg)

<hr>

## GET Moon day
```html
GET: https://astrolog.life/api/api_get_moon_day.php?type=[string]&date=[string]&time=[string]&tzone=[string]&ext=[string]&id=[string]
```
###### Example 1 (only number of Moon day)
| Examples | Link |
| ------ | ------ |
| Example1 | [api_get_moon_day.php?type=day&date=2020-12-01&time=17:43&tzone=UTC+3&ext=num&id=5fd7d97bb3f26](https://astrolog.life/api/api_get_moon_day.php?type=day&date=2020-12-08&time=17:43&tzone=UTC+3&ext=num&id=5fd7d97bb3f26)|
| Example1 | [api_get_moon_day.php?type=day&date=2020-12-01&time=17:43&tzone=UTC+3&ext=html&id=5fd7d97bb3f26](https://astrolog.life/api/api_get_moon_day.php?type=day&date=2020-12-08&time=17:43&tzone=UTC+3&ext=html&id=5fd7d97bb3f26)|

| Params | Value | Note |
| ------ | ------ | ------ |
| type | `day` | default Now() |
| date | `2020-12-08` | it's mean 1 Dec 2020, default Now() |
| time | `17:43` or `17:43:05` | default Now() |
| tzone | `UTC+1` or `UTC+5` etc. | default `UCT+3` MSK Russia |
| ext | `num` or `html` | default `html` |
| id | A | Required, your api key |

Example `ext = num` result:

```html
22
```
Example `ext = html` result:

![Widget Moon day](https://astrolog.life/api/git_review/img/example_day_html.svg)

<hr>

## GET Moon day today (now)
###### GET: `https://astrolog.life/api/api_get_moon_day.php?type=[string]&date=[string]&time=[string]&tzone=[string]&ext=[string]&id=[string]`
###### Example 1 (only number of Moon day)
| Examples | Link |
| ------ | ------ |
| Example1 | [api_get_moon_day.php?type=now&tzone=UTC+3&ext=num&id=5fd7d97bb3f26](https://astrolog.life/api/api_get_moon_day.php?type=now&tzone=UTC+3&ext=num&id=5fd7d97bb3f26)|
| Example1 | [api_get_moon_day.php?type=now&tzone=UTC+3&ext=html&id=5fd7d97bb3f26](https://astrolog.life/api/api_get_moon_day.php?type=now&tzone=UTC+3&ext=html&id=5fd7d97bb3f26)|

| Params | Value |
| ------ | ------ |
| type | `now` |
| tzone | `UTC+1` or `UTC+5` etc., default `UCT+3` MSK Russia |
| ext | `num` or `html`, default `html` |
| id | Required, your api key |

Example ext=num result:

```html
23
```
Example ext=html result:

![Widget Moon day](https://astrolog.life/api/git_review/img/example_day_html.svg)

<hr>

## GET Moon phases calendar
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


Example result:

![Widget Moon phases on custom period](https://astrolog.life/api/git_review/img/example_moon_phases_period450.svg)

<hr>

## GET Moon in zodiac table
**Example**
```html
GET: https://astrolog.life/api/api_get_moon.php?moon_type=in_sign&date1=X&date2=Y&id=A
```
| Params |  | Value |
| ------ | ------ | ------ |
| date_start | X | format `2020-12-01` |
| date_stop | Y | format `2020-12-01` |
| id | A | Required, your api key |

| Examples | Link |
| ------ | ------ |
| Table Jan 2021 | [api_get_moon.php?moon_type=in_sign&date1=2021-01-01&date2=2021-01-31](https://astrolog.life/api/api_get_moon.php?moon_type=in_sign&date1=2021-01-01&date2=2021-01-31)|


Example result:

![Widget Moon phases on custom period](https://astrolog.life/api/git_review/img/example_moon_inzodiac_table.svg)

<hr>

# Todo
* Json output
* Telegram format outout for bots

# API Wrappers 
* Only native html & CSS 
* **No js**, **No JQuery** etc = no conflict style and engine
* Minimal CSS style (without heavy CSS properties)

# Contributing
Feel free to submit a pull request or an issue!



#### Note 1 : This API is free (but limit 1000 requests per Month or 100 requests per day).  

#### Note 2 : If the API goes down, please open a issue or comment on already existing one with the problem(s) that you are facing. This is the best way to let me know that the API is not working, avoid sending email. 

#### Note 3 : You can also try - https://astrolog.life/api which has a commercial license and more features (custom styles, output in json, different language etc).
