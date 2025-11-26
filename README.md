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

## Installation instructions

You can download the source files of this repository as a zip, and unzip them onto your server (without this README.txt)

The directory structure in this repository is a mirror of the structure as found on a server running webtrees.
Make sure the files are uploaded in this structure:

 * `modules_v4 <dir>`
   * `FixMissingMarriedNames <dir>`
     * `FixMissingMarriedNames.php`
     * `module.php`

## License
Copyright (C) 2021 webtrees development team, (C) 2025 Bert Koorengevel.

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

## Warranty
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see https://www.gnu.org/licenses
