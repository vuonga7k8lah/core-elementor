# Type Elementor

* [1.Text](#1text)
* [2.Number](#2number)
* [3.Textarea](#3textarea)
* [4.Wysiwyg](#4wysiwyg)
* [5.Code](#5code)
* [6.Hidden](#6hidden)
* [7.Switcher](#7switcher)
* [8.Toggle](#8toggle)
* [9.Select](#9select)
* [10.Select2](#10select2)
* [11.Choose](#11choose)
* [12.Color](#12color)
* [13.Icons](#13icons)
* [14.Font](#14font)
* [15.DateTime](#15dateTime)
* [16.Gallery](#16gallery)
* [17.Array](#17array)
* [18.Tabs](#18tabs)
* [19.Tab](#19tab)
* [20.Session](#20session)
* [21.Link](#21link)
* [22.Media](#22media)
* [23.Conditional](#23conditional)
* [24.Slider range](#24slider-range)

## 1.text

#### Arguments

````ts
export interface Text {
    label: string
    title?: string
    id: string
    name: string
    type: text
    default?: string
    placeholder?: string
}

````

#### Example

````json
{
  "name": "settings",
  "id": "title3455dd4311",
  "label": "Settings",
  "type": "text",
  "default": "test hihi",
  "placeholder": "string"
}

````

## 2.number

#### Arguments

````ts
export interface Number {
    label: string
    title?: string
    id: string
    name: string
    type: number
    default?: string
    placeholder?: string
    min?: string
    max?: string
}

````

#### Example

````json
{
  "name": "number-test",
  "id": "xfd455dd4311",
  "label": "Number test",
  "type": "number",
  "default": "2",
  "max": "6",
  "min": "1",
  "placeholder": "Lorem Ipsum is simply dummy text of the printing and typesetting industry"
}

````

## 3.textarea

#### Arguments

````ts
export interface Textarea {
    label: string
    name: string
    rows?: int
    condition?: Codition
    type: textarea
    default?: string
    placeholder?: string
    description?: string
}

export interface Codition {
    /** điều kiện hiển thị các file không áp dụng đối với các file section,tabs,tab,array
     * id ở đây là id của field và value là giá trị của field khi đạt điều kiện để hiển thị đối với nhiều trường thì
     sẽ là array còn 1 thì là string
     * */
    id: value
}
````

#### Example

````json

{
  "id": "xfd455dd4311",
  "name": "xfd455dd4311",
  "label": "Description",
  "type": "textarea",
  "default": "Default description",
  "rows": 10,
  "condition": {},
  "placeholder": "Lorem Ipsum is simply dummy text of the printing and typesetting industry"
}

````

## 4.wysiwyg

#### Arguments

````ts
export interface Wysiwyg {
    label: string
    name: string
    type: wysiwyg
    default?: string
    placeholder?: string
    description?: string
}

````

#### Example

````json
{
  "id": "xfd455dd4311",
  "name": "xfd455dd4311",
  "label": "Description",
  "type": "wysiwyg",
  "default": "Default description",
  "placeholder": "Lorem Ipsum is simply dummy text of the printing and typesetting industry"
}

````

## 5.code

#### Arguments

````ts
export interface Code {
    label: string
    id: string
    name: string
    language?: string // default html
    type: code
    rows?: 10
    default?: string
    description?: string
}

````

#### Example

````json
{
  "id": "xfd455dd4311",
  "name": "xfd455dd4311",
  "label": "Description",
  "type": "code",
  "language": "php",
  "rows": 20,
  "default": "Default description"
}

````

## 6.hidden

````ts
export interface Hidden {
    label: string
    id: string
    name: string
    type: hidden
    default?: string
}

````

#### Example

````json
{
  "id": "xfd455dd4311",
  "name": "xfd455dd4311",
  "label": "Description",
  "type": "hidden",
  "default": "Default description"
}

````

## 7.switcher

````ts
export interface Switcher {
    label: string
    id: string
    name: string
    type: switcher
    default?: string
    description?: string
    label_on?: string
    label_off?: string
    return_value?: string
}

````

#### Example

````json
{
  "id": "xfd455dd4311",
  "name": "xfd455dd4311",
  "label": "Show Title",
  "type": "switcher",
  "label_on": "Show",
  "label_off": "Hide",
  "return_value": "yes",
  "default": "yes"
}

````

## 8.popover-toggle

````ts
export interface Toggle {
    label: string
    id: string
    name: string
    type: toggle
    default?: string
    description?: string
    label_on?: string
    label_off?: string
    return_value?: string
    /** mảng các fieids*/
    fields: []
}

````

#### Example

````json
{
  "id": "xfd455dd4311",
  "name": "xfd455dd4311",
  "label": "Show Title",
  "type": "switcher",
  "label_on": "Show",
  "label_off": "Hide",
  "return_value": "yes",
  "default": "yes"
}

````

## 9.select

````ts
export interface Select {
    label: string
    id: string
    name: string
    type: select
    default?: string
    description?: string
    options?: object
}

````

#### Example

````json
{
  "id": "xfd455dssd4311",
  "name": "xfd455dssd4311",
  "label": "Border Style",
  "type": "select",
  "options": {
    "solid": "Solid",
    "dashed": "Dashed",
    "dotted": "Dotted"
  },
  "default": "solid"
}

````

## 10.select2

````ts
export interface Select2 {
    label: string
    id: string
    name: string
    type: select2
    default: string | object
    description?: string
    multiple: boolean
    options: object
}

````

#### Example

````json
{
  "id": "xfd455dssd4311",
  "name": "xfd455dssd4311",
  "label": "Border Style",
  "type": "select2",
  "multiple": true,
  "options": {
    "solid": "Solid",
    "dashed": "Dashed",
    "dotted": "Dotted"
  },
  "default": [
    "dashed",
    "solid"
  ]
}

````

## 11.choose

````ts
export interface Choose {
    label: string
    id: string
    name: string
    type: choose
    default?: string
    description?: string
    toggle: boolean
    options: object
}

````

#### Example

````json
{
  "id": "xfd45ss5dssd4311",
  "name": "xfd45ss5dssd4311",
  "label": "Alignment",
  "type": "choose",
  "toggle": true,
  "options": {
    "center": {
      "title": "Center",
      "icon": "eicon-text-align-center"
    },
    "left": {
      "title": "Left",
      "icon": "eicon-text-align-left"
    },
    "right": {
      "title": "Right",
      "icon": "eicon-text-align-right"
    }
  },
  "default": "center"
}

````

## 12.color

````ts
export interface Color {
    label: string
    id: string
    name: string
    type: color
    default?: string
    description?: string
    alpha?: boolean
}

````

#### Example

````json
{
  "id": "xfd45ss5dssd4311",
  "name": "xfd45ss5dssd4311",
  "label": "Title Color",
  "type": "color"
}

````

## 13.icons

````ts
export interface Icons {
    label: string
    id: string
    name: string
    type: icons
    default?: {}
    description?: string
    include?: object
    exclude?: object
}

````

#### Example

````json
{
  "id": "xfd45ss5dssd4311",
  "name": "xfd45ss5dssd4311",
  "label": "Title Color",
  "type": "icons",
  "default": {
    "value": "fas fa-star",
    "library": "solid"
  }
}

````

## 14.font

````ts
export interface Font {
    label: string
    id: string
    name: string
    type: font
    default?: string
    description?: string
    options: object
}

````

#### Example

````json
{
  "id": "xfd45ss5dssd4311",
  "name": "xfd45ss5dssd4311",
  "label": "Title Color",
  "type": "font",
  "default": "Open Sans",
  "selectors": {
    "{{WRAPPER}} .title": "font-family: {{VALUE}}"
  }
}

````

## 15.dateTime

````ts
export interface DateTime {
    label: string
    name: string
    id: string
    type: dateTime
    default?: string
    description?: string
}

````

#### Example

````json
{
  "id": "xfd45ss5dssd4311",
  "name": "xfd45ss5dssd4311",
  "label": "Title Color",
  "type": "dateTime"
}

````

## 16.gallery

````ts
export interface Gallery {
    label: string
    id: string
    name: string
    type: gallery
    default?: Default[]
    description?: string
}

export interface Default {
    url: string
}

````

#### Example

````json
{
  "id": "xfd45ss5dssd4311",
  "name": "xfd45ss5dssd4311",
  "label": "Add Images",
  "type": "gallery",
  "default": [
    {
      "url": "sss"
    }
  ]
}

````

## 17.array

````ts
export interface Array {
    label: string
    id: string
    name: string
    type: array
    default: []
    description?: string,
    fields: [] // mảng các fieids
}

````

#### Example

````json
 {
  "id": "test-array",
  "name": "test-array",
  "label": "TEST ARRAY",
  "type": "array",
  "required": false,
  "default": [
    {
      "test-icons": "test abc ",
      "test-title": "xxxxx ",
      "test-price": "test price ",
      "test-wysiwyg": "test price "
    }
  ],
  "fields": [
    {
      "label": "Test Icons",
      "id": "test-icons",
      "name": "test-icons",
      "type": "icons",
      "required": false
    },
    {
      "id": "test-title",
      "name": "test-title",
      "label": "Title",
      "type": "text",
      "required": true
    },
    {
      "id": "test-price",
      "name": "test-price",
      "label": "Price",
      "type": "text",
      "required": true
    },
    {
      "id": "test-wysiwyg",
      "name": "test-wysiwyg",
      "label": "TEST wysiwyg",
      "default": "TEST wysiwyg",
      "type": "wysiwyg"
    }
  ]
}

````

## 18.tabs

````ts
export interface Tabs {
    label: string
    id: string
    name: string
    type: tabs
    /** mảng các fieids*/
    fields: []
}

````

#### Example

````json
{
  "id": "xfd45ss5dssd4311",
  "name": "xfd45ss5dssd4311",
  "label": "Add Images",
  "type": "tabs"
}

````

## 19.tab

````ts
export interface Tab {
    label: string
    id: string
    name: string
    type: tab
    /** mảng các fieids*/
    fields: []
}

````

#### Example

````json
{
  "id": "xfd45ss5dssd4311",
  "name": "xfd45ss5dssd4311",
  "label": "Add Images",
  "type": "tab",
  "default": []
}

````

## 20.section

````ts
export interface Section {
    label: string
    id: string
    name: string
    type: section
    default: []
    description?: string,
    /** mảng các fieids*/
    fields: []
}

````

#### Example

````json
{
  "id": "xfd45ss5dssd4311",
  "name": "xfd45ss5dssd4311",
  "label": "Add Images",
  "type": "section",
  "default": []
}

````

## 21.media

````ts
export interface Media {
    label: string
    id: string
    name: string
    type: media
    default?: Default
    /**  có thể là video,svg,image*/
    media_types?: ['image']
    description?: string
}

export interface Default {
    url: string
}

````

#### Example

````json
{
  "id": "id_data_image",
  "type": "media",
  "default": {
    "url": "http://0.0.0.0:9005/wp-content/uploads/2022/04/download.jpeg"
  },
  "name": "image",
  "label": "Image"
}

````

## 22.url

````ts
export interface Url {
    label: string
    id: string
    name: string
    type: url
    default?: Default
    placeholder?: string
    description?: string
}

export interface Default {
    url: string,
    is_external: boolean,
    nofollow: boolean,
    custom_attributes: string
}

````

#### Example

````json
{
  "id": "id_data_url",
  "type": "url",
  "default": {
    "url": "http://0.0.0.0:9005/wp-content/uploads/2022/04/download.jpeg",
    "is_external": true,
    "nofollow": true,
    "custom_attributes": ""
  },
  "name": "url",
  "label": "url"
}

````

## 23.conditional

#### Arguments

````ts
export interface Conditional {
    label: string
    name: string
    rows?: int
    condition: Codition
    type: textarea
    default?: string
    placeholder?: string
    description?: string
}

export interface Codition {
    /** điều kiện hiển thị các file không áp dụng đối với các file section,tabs,tab,array
     * id ở đây là id của field và value là giá trị của field khi đạt điều kiện để hiển thị đối với nhiều trường thì
     sẽ là array còn 1 thì là string
     * */
    id: value
}
````

#### Example

````json
[
  {
    "id": "togge_1",
    "name": "xfd455dd4311",
    "label": "Description",
    "type": "switcher"
  },
  {
    "id": "xfd455dd4311",
    "name": "xfd455dd4311",
    "label": "Description",
    "type": "textarea",
    "default": "Default description",
    "rows": 10,
    "condition": {
      "togge_1": "yes"
    },
    "placeholder": "Lorem Ipsum is simply dummy text of the printing and typesetting industry"
  }
]

````

## 24.slider-range

````ts
export interface Slider {
    label: string
    id: slider
    name: string
    type: url
    /** An array of available CSS units like px, em, rem, %, deg and vh.*/
    size_units: string[]
    range: Range
    default?: Default
    placeholder?: string
    description?: string
}

export interface Range {
    min: int,
    max: int,
    step: int
}

export interface Default {
    /**Initial unit of the slider. */
    unit: string,
    /** Initial size of the slider.*/
    size: int
}

````

#### Example

````json
{
  "id": "id_data_slider",
  "type": "slider",
  "default": {
    "unit": "px",
    "size": 222
  },
  "size_units": [
    "px"
  ],
  "range": {
    "px": {
      "min": 0,
      "max": 1110,
      "step": 2
    }
  },
  "name": "url",
  "label": "url"
}

````