---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#AnalyticType Management


APIs for managing analytic types
<!-- START_b5b1d39fbc905683ec00fff25a83371a -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/analytic_types" 
```

```javascript
const url = new URL("http://localhost/api/v1/analytic_types");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/analytic_types`


<!-- END_b5b1d39fbc905683ec00fff25a83371a -->

<!-- START_63cca42d4c48fa061971d76377b5d222 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/analytic_types/create" 
```

```javascript
const url = new URL("http://localhost/api/v1/analytic_types/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/analytic_types/create`


<!-- END_63cca42d4c48fa061971d76377b5d222 -->

<!-- START_a2a0b7667e6e728c8a60a2a0477c1eba -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/analytic_types" 
```

```javascript
const url = new URL("http://localhost/api/v1/analytic_types");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/analytic_types`


<!-- END_a2a0b7667e6e728c8a60a2a0477c1eba -->

<!-- START_d12b0e0ea4793fa2f12497690d0f356c -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/analytic_types/1" 
```

```javascript
const url = new URL("http://localhost/api/v1/analytic_types/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/analytic_types/{analytic_type}`


<!-- END_d12b0e0ea4793fa2f12497690d0f356c -->

<!-- START_52760bdaa02223ec714529a76abf2076 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/analytic_types/1/edit" 
```

```javascript
const url = new URL("http://localhost/api/v1/analytic_types/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/analytic_types/{analytic_type}/edit`


<!-- END_52760bdaa02223ec714529a76abf2076 -->

<!-- START_49eec0d240f018d8ed88f313dd1c23ab -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/analytic_types/1" 
```

```javascript
const url = new URL("http://localhost/api/v1/analytic_types/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/analytic_types/{analytic_type}`

`PATCH api/v1/analytic_types/{analytic_type}`


<!-- END_49eec0d240f018d8ed88f313dd1c23ab -->

<!-- START_e31c0e046f3f8f8ac20eb2ed5e569420 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/analytic_types/1" 
```

```javascript
const url = new URL("http://localhost/api/v1/analytic_types/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/analytic_types/{analytic_type}`


<!-- END_e31c0e046f3f8f8ac20eb2ed5e569420 -->

#Property Management


APIs for managing properties
<!-- START_e5588dd16d9e05e8febe0e77c8f9afdd -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/properties" 
```

```javascript
const url = new URL("http://localhost/api/v1/properties");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/properties`


<!-- END_e5588dd16d9e05e8febe0e77c8f9afdd -->

<!-- START_349ce47b0f5e8e6d20ee446344325631 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/properties/create" 
```

```javascript
const url = new URL("http://localhost/api/v1/properties/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/properties/create`


<!-- END_349ce47b0f5e8e6d20ee446344325631 -->

<!-- START_bd2e0b468c4821546889577d54ce92c7 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/properties" 
```

```javascript
const url = new URL("http://localhost/api/v1/properties");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/properties`


<!-- END_bd2e0b468c4821546889577d54ce92c7 -->

<!-- START_2075a2790a981db2160ee91814c77838 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/properties/1" 
```

```javascript
const url = new URL("http://localhost/api/v1/properties/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/properties/{property}`


<!-- END_2075a2790a981db2160ee91814c77838 -->

<!-- START_eceded22954dca71cfdf965bdfaabc3b -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/properties/1/edit" 
```

```javascript
const url = new URL("http://localhost/api/v1/properties/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/properties/{property}/edit`


<!-- END_eceded22954dca71cfdf965bdfaabc3b -->

<!-- START_21c762f0aacf1d4551249bf34904d379 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/properties/1" 
```

```javascript
const url = new URL("http://localhost/api/v1/properties/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/properties/{property}`

`PATCH api/v1/properties/{property}`


<!-- END_21c762f0aacf1d4551249bf34904d379 -->

<!-- START_69eade355cb18370d8dd2b5b1a2996fe -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/properties/1" 
```

```javascript
const url = new URL("http://localhost/api/v1/properties/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/properties/{property}`


<!-- END_69eade355cb18370d8dd2b5b1a2996fe -->

#general


<!-- START_8fcf8bf06eda291959b0c8a2a679f507 -->
## Show the dashboard.

> Example request:

```bash
curl -X GET -G "http://localhost/log-viewer" 
```

```javascript
const url = new URL("http://localhost/log-viewer");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET log-viewer`


<!-- END_8fcf8bf06eda291959b0c8a2a679f507 -->

<!-- START_15081fd356f32e98502fa21a2737815d -->
## List all logs.

> Example request:

```bash
curl -X GET -G "http://localhost/log-viewer/logs" 
```

```javascript
const url = new URL("http://localhost/log-viewer/logs");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET log-viewer/logs`


<!-- END_15081fd356f32e98502fa21a2737815d -->

<!-- START_82590949e3095f59d954041fb995ca98 -->
## Delete a log.

> Example request:

```bash
curl -X DELETE "http://localhost/log-viewer/logs/delete" 
```

```javascript
const url = new URL("http://localhost/log-viewer/logs/delete");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE log-viewer/logs/delete`


<!-- END_82590949e3095f59d954041fb995ca98 -->

<!-- START_8db2a7bd657e02e3967d6b65328c22d9 -->
## Show the log.

> Example request:

```bash
curl -X GET -G "http://localhost/log-viewer/logs/1" 
```

```javascript
const url = new URL("http://localhost/log-viewer/logs/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "error": "Resource not found."
}
```

### HTTP Request
`GET log-viewer/logs/{date}`


<!-- END_8db2a7bd657e02e3967d6b65328c22d9 -->

<!-- START_6c595d3c570b8f53539b9a5918d283eb -->
## Download the log

> Example request:

```bash
curl -X GET -G "http://localhost/log-viewer/logs/1/download" 
```

```javascript
const url = new URL("http://localhost/log-viewer/logs/1/download");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (500):

```json
{
    "message": "Server Error"
}
```

### HTTP Request
`GET log-viewer/logs/{date}/download`


<!-- END_6c595d3c570b8f53539b9a5918d283eb -->

<!-- START_abff89e735a9c458227fc252a83922ac -->
## Filter the log entries by level.

> Example request:

```bash
curl -X GET -G "http://localhost/log-viewer/logs/1/1" 
```

```javascript
const url = new URL("http://localhost/log-viewer/logs/1/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (404):

```json
{
    "error": "Resource not found."
}
```

### HTTP Request
`GET log-viewer/logs/{date}/{level}`


<!-- END_abff89e735a9c458227fc252a83922ac -->

<!-- START_441535d828b04c126a170a5949308df4 -->
## Show the log with the search query.

> Example request:

```bash
curl -X GET -G "http://localhost/log-viewer/logs/1/1/search" 
```

```javascript
const url = new URL("http://localhost/log-viewer/logs/1/1/search");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (302):

```json
null
```

### HTTP Request
`GET log-viewer/logs/{date}/{level}/search`


<!-- END_441535d828b04c126a170a5949308df4 -->

<!-- START_0c068b4037fb2e47e71bd44bd36e3e2a -->
## Authorize a client to access the user&#039;s account.

> Example request:

```bash
curl -X GET -G "http://localhost/oauth/authorize" 
```

```javascript
const url = new URL("http://localhost/oauth/authorize");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/authorize`


<!-- END_0c068b4037fb2e47e71bd44bd36e3e2a -->

<!-- START_e48cc6a0b45dd21b7076ab2c03908687 -->
## Approve the authorization request.

> Example request:

```bash
curl -X POST "http://localhost/oauth/authorize" 
```

```javascript
const url = new URL("http://localhost/oauth/authorize");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/authorize`


<!-- END_e48cc6a0b45dd21b7076ab2c03908687 -->

<!-- START_de5d7581ef1275fce2a229b6b6eaad9c -->
## Deny the authorization request.

> Example request:

```bash
curl -X DELETE "http://localhost/oauth/authorize" 
```

```javascript
const url = new URL("http://localhost/oauth/authorize");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE oauth/authorize`


<!-- END_de5d7581ef1275fce2a229b6b6eaad9c -->

<!-- START_a09d20357336aa979ecd8e3972ac9168 -->
## Authorize a client to access the user&#039;s account.

> Example request:

```bash
curl -X POST "http://localhost/oauth/token" 
```

```javascript
const url = new URL("http://localhost/oauth/token");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/token`


<!-- END_a09d20357336aa979ecd8e3972ac9168 -->

<!-- START_d6a56149547e03307199e39e03e12d1c -->
## Get all of the authorized tokens for the authenticated user.

> Example request:

```bash
curl -X GET -G "http://localhost/oauth/tokens" 
```

```javascript
const url = new URL("http://localhost/oauth/tokens");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/tokens`


<!-- END_d6a56149547e03307199e39e03e12d1c -->

<!-- START_a9a802c25737cca5324125e5f60b72a5 -->
## Delete the given token.

> Example request:

```bash
curl -X DELETE "http://localhost/oauth/tokens/1" 
```

```javascript
const url = new URL("http://localhost/oauth/tokens/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE oauth/tokens/{token_id}`


<!-- END_a9a802c25737cca5324125e5f60b72a5 -->

<!-- START_abe905e69f5d002aa7d26f433676d623 -->
## Get a fresh transient token cookie for the authenticated user.

> Example request:

```bash
curl -X POST "http://localhost/oauth/token/refresh" 
```

```javascript
const url = new URL("http://localhost/oauth/token/refresh");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/token/refresh`


<!-- END_abe905e69f5d002aa7d26f433676d623 -->

<!-- START_babcfe12d87b8708f5985e9d39ba8f2c -->
## Get all of the clients for the authenticated user.

> Example request:

```bash
curl -X GET -G "http://localhost/oauth/clients" 
```

```javascript
const url = new URL("http://localhost/oauth/clients");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/clients`


<!-- END_babcfe12d87b8708f5985e9d39ba8f2c -->

<!-- START_9eabf8d6e4ab449c24c503fcb42fba82 -->
## Store a new client.

> Example request:

```bash
curl -X POST "http://localhost/oauth/clients" 
```

```javascript
const url = new URL("http://localhost/oauth/clients");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/clients`


<!-- END_9eabf8d6e4ab449c24c503fcb42fba82 -->

<!-- START_784aec390a455073fc7464335c1defa1 -->
## Update the given client.

> Example request:

```bash
curl -X PUT "http://localhost/oauth/clients/1" 
```

```javascript
const url = new URL("http://localhost/oauth/clients/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT oauth/clients/{client_id}`


<!-- END_784aec390a455073fc7464335c1defa1 -->

<!-- START_1f65a511dd86ba0541d7ba13ca57e364 -->
## Delete the given client.

> Example request:

```bash
curl -X DELETE "http://localhost/oauth/clients/1" 
```

```javascript
const url = new URL("http://localhost/oauth/clients/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE oauth/clients/{client_id}`


<!-- END_1f65a511dd86ba0541d7ba13ca57e364 -->

<!-- START_9e281bd3a1eb1d9eb63190c8effb607c -->
## Get all of the available scopes for the application.

> Example request:

```bash
curl -X GET -G "http://localhost/oauth/scopes" 
```

```javascript
const url = new URL("http://localhost/oauth/scopes");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/scopes`


<!-- END_9e281bd3a1eb1d9eb63190c8effb607c -->

<!-- START_9b2a7699ce6214a79e0fd8107f8b1c9e -->
## Get all of the personal access tokens for the authenticated user.

> Example request:

```bash
curl -X GET -G "http://localhost/oauth/personal-access-tokens" 
```

```javascript
const url = new URL("http://localhost/oauth/personal-access-tokens");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET oauth/personal-access-tokens`


<!-- END_9b2a7699ce6214a79e0fd8107f8b1c9e -->

<!-- START_a8dd9c0a5583742e671711f9bb3ee406 -->
## Create a new personal access token for the user.

> Example request:

```bash
curl -X POST "http://localhost/oauth/personal-access-tokens" 
```

```javascript
const url = new URL("http://localhost/oauth/personal-access-tokens");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST oauth/personal-access-tokens`


<!-- END_a8dd9c0a5583742e671711f9bb3ee406 -->

<!-- START_bae65df80fd9d72a01439241a9ea20d0 -->
## Delete the given token.

> Example request:

```bash
curl -X DELETE "http://localhost/oauth/personal-access-tokens/1" 
```

```javascript
const url = new URL("http://localhost/oauth/personal-access-tokens/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE oauth/personal-access-tokens/{token_id}`


<!-- END_bae65df80fd9d72a01439241a9ea20d0 -->

<!-- START_c3fa189a6c95ca36ad6ac4791a873d23 -->
## Register api

> Example request:

```bash
curl -X POST "http://localhost/api/login" 
```

```javascript
const url = new URL("http://localhost/api/login");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/login`


<!-- END_c3fa189a6c95ca36ad6ac4791a873d23 -->

<!-- START_d7b7952e7fdddc07c978c9bdaf757acf -->
## Register api

> Example request:

```bash
curl -X POST "http://localhost/api/register" 
```

```javascript
const url = new URL("http://localhost/api/register");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/register`


<!-- END_d7b7952e7fdddc07c978c9bdaf757acf -->

<!-- START_345abc695ee7158542431fa54ecbbed2 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/property_analytics" 
```

```javascript
const url = new URL("http://localhost/api/v1/property_analytics");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/property_analytics`


<!-- END_345abc695ee7158542431fa54ecbbed2 -->

<!-- START_5c7564ce2dec14683b60d70177ed6751 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/property_analytics/create" 
```

```javascript
const url = new URL("http://localhost/api/v1/property_analytics/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/property_analytics/create`


<!-- END_5c7564ce2dec14683b60d70177ed6751 -->

<!-- START_6a17ab486e9494fd2e329d0b9070115c -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/v1/property_analytics" 
```

```javascript
const url = new URL("http://localhost/api/v1/property_analytics");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST api/v1/property_analytics`


<!-- END_6a17ab486e9494fd2e329d0b9070115c -->

<!-- START_e8e8023d0de3fd076d56b2dd479f8d9a -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/property_analytics/1" 
```

```javascript
const url = new URL("http://localhost/api/v1/property_analytics/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/property_analytics/{property_analytic}`


<!-- END_e8e8023d0de3fd076d56b2dd479f8d9a -->

<!-- START_bfb38f31f2b1c0683dd3b85459c952a0 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/property_analytics/1/edit" 
```

```javascript
const url = new URL("http://localhost/api/v1/property_analytics/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/property_analytics/{property_analytic}/edit`


<!-- END_bfb38f31f2b1c0683dd3b85459c952a0 -->

<!-- START_a7bf8b82192b51242ec9a59eeabe1305 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/v1/property_analytics/1" 
```

```javascript
const url = new URL("http://localhost/api/v1/property_analytics/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT api/v1/property_analytics/{property_analytic}`

`PATCH api/v1/property_analytics/{property_analytic}`


<!-- END_a7bf8b82192b51242ec9a59eeabe1305 -->

<!-- START_c3a794304f0a9dca66705870c6b6ef65 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/v1/property_analytics/1" 
```

```javascript
const url = new URL("http://localhost/api/v1/property_analytics/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE api/v1/property_analytics/{property_analytic}`


<!-- END_c3a794304f0a9dca66705870c6b6ef65 -->

<!-- START_d485bbbf373fc2eaa29eb9e3bd964582 -->
## Display Summary Analytics for All property Analytics in specified Suburb, State or Country, .

> Example request:

```bash
curl -X GET -G "http://localhost/api/v1/property_analytics/summary/1/1" 
```

```javascript
const url = new URL("http://localhost/api/v1/property_analytics/summary/1/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/v1/property_analytics/summary/{filter}/{value}`


<!-- END_d485bbbf373fc2eaa29eb9e3bd964582 -->


