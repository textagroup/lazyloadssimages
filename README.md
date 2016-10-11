# lazyloadssimages

## Introduction

Use jQuery lazy load library to delay requesting images until they are in view

Copyright (C) 2010-2016 kirk.mayo@solnet.co.nz

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.


## Maintainer Contact

    * Kirk Mayo kirk.mayo (at) solnet (dot) co.nz

## Requirements

    * SilverStripe 3.2 +

## Features

* Saves on http requests by lazy loading of images on a page

## Composer Installation

  composer require textagroup/lazyloadssimages

## Installation Manual

 1. Download the module form GitHub (Composer support to be added)
 2. Extract the file (if you are on windows try 7-zip for extracting tar.gz files
 3. Make sure the folder after being extracted is named 'lazyloadssimages'
 4. Place this directory in your sites root directory. This is the one with framework and cms in it.
 5. Run in your browser - `/dev/build` to rebuild the database.

## Usage ##

After the module is installed you will need to confirm that the jQuery library is
being used as this is required by jquery.lazyload.min.js
Any existing pages with images will not be affected until the page has been saved via the CMS.

## TODO ##

Get this working with Oembed images
