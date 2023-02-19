# Squeeze

Squeeze is a Statamic addon that provides a modifier named 'squeeze' which removes a bunch of characters from a given
string by replacing them with an empty string.

## Features

This addon removes the following characters:

- `_`
- `-`,
- `/`,
- `:`,
- ` ` (whitespace)

## How to Install

You can search for this addon in the `Tools > Addons` section of the Statamic control panel and click **install**, or run the following command from your project root:

``` bash
composer require doefom/squeeze
```

## How to Use

In your `.yaml` files you probably have some kind of string variable like this:
```yaml
text: "A_string-to/test:the squeeze"
```

Then you can use the modifier in your antlers views like this:
```antlers
{{ text | squeeze }}
```

Which outputs:
```text
Astringtotestthesqueeze
```
