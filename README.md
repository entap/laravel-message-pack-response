# entap/laravel-message-pack-response

MessagePack を Response に用いる。

## Requirement

-   PHP 7.2 以上
-   Laravel 7.0 以上

## Usage

### Installation

`composer.json` にリポジトリを登録する。

```json
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/entap/laravel-message-pack-response"
    }
]
```

`Composer` を用いて導入する。

```sh
composer require entap/laravel-message-pack-response
```

### Response

```php
Route::get('/example.mp', function () {
    return response()->mpac(User::find(1));
});
```
