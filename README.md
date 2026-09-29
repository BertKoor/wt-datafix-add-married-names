# webtrees datafix - Add married names

Up to [webtrees](https://github.com/fisharebest/webtrees) v2.0.26 there was a datafix procedure "Add married names" which added married names to women that only had a maiden name.

As webtrees main developer Greg Roach / fisharebest wrote on github [issue #3153](https://github.com/fisharebest/webtrees/issues/3153) :

> This data-fix is full of assumptions - most of which are wrong.
>
> I don't really like it, I would never use it myself, and I would always advise against its use.
>
> Maybe just remove it?

Commit [f9e38ab](https://github.com/fisharebest/webtrees/commit/f9e38ab10cf9c38408ac1038c5fad82fea00955d) did just that.

However some webtrees admins expressed they are missing this module.
So this is what I did:

 * Took a copy of the deleted datafix module.
 * Wrap it in a custom module.
 * Check it executes on my local webtrees v2.2.4 / PHP 8.4 development environment.
 * Put it in this github repository.

## Release notes
| Version | Released    | Notes                                                      |
|---------|-------------|------------------------------------------------------------|
| 1.0.0   | 26 NOV 2025 | Initial release (without version)                          |
| 1.1.0   | 29 SEP 2026 | Only select records with more marriages than married names |

## Installation instructions
On your server there is a directory `modules_v4`.
Create a subdirectory `wt-datafix-add-married-names` in there.

Download the source files of this repository as a zip, and unzip them onto your server into the directory you just created.

The end result looks like this:

 * `modules_v4 <dir>`
   * `wt-datafix-add-married-names <dir>`
     * `FixMissingMarriedNames.php`
     * `module.php`

The files `composer.json`, `latest-version.txt` and this `README.md` are not required to be uploaded to your server, but won't do any harm.

## Usage
After installation it can be run from the webtrees Control Panel:
* Select a family tree
* Under `Family tree` click on the link `Data fixes`
* Select the datafix `Add married names` and click `Next`
* Click the `Search` button for a preview of the affected records

The module will do a course selection of all females which have less married names than families in which they are the wife.

Given for example we had already recorded the couple John F. Kennedy and his wife Jackie. Her name details:
```
1 NAME Jacqueline /Bouvier/
2 TYPE BIRTH
1 NAME Jackie /Kennedy/
2 TYPE MARRIED
```

When the marriage with her second husband Aristoteles Onassis is recorded but not yet his name, the datafix will add a line to the first name:
```
2 _MARNM Jacqueline /Onassis/
```

Note that the custom (non-standard) GEDCOM tag `_MARNM` is used, as was usual for the old version of webtrees.
By running the datafix `Convert INDI:NAME:_XXX tags to GEDCOM 5.5.1` this can be converted to:

```
1 NAME Jacqueline /Bouvier/
2 TYPE BIRTH
1 NAME Jackie /Kennedy/
2 TYPE MARRIED
1 NAME Jacqueline /Onassis/
2 TYPE MARRIED
```

## License
````
Copyright (C) 2021 webtrees development team, (C) 2025-2026 Bert Koorengevel.

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.
````
## Warranty
````
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. 
See the GNU General Public License for more details:
<https://www.gnu.org/licenses/gpl.html>
````