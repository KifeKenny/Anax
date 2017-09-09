REM Server - a REST Mockup API
===========================================
This is a mockup server for development of applications working with a REST API. The server responds to any API endpoint, stores data and changes to the data in the user session.
<hr>

Dataset `chess`.
-------------------------------------------
* [Get all chess-pieces](remserver/api/chess)
* [Get the chess-piece with `id=1`](remserver/api/chess/1)

<hr>

Dataset `users`.
-------------------------------------------
* [Get all users](remserver/api/users)
* [Get the user with `id=1`](remserver/api/users/1)


<hr>

Destroy Session reseting datasets
-------------------------------------------
* [Reset datasets](remserver/api/destroy)

```
GET remserver/api/destroy
```
<hr>

Limit search in datasets
-------------------------------------------
* [Chess limited to 4](remserver/api/chess?offset=0&limit=4)

```text
GET /api/[dataset]?offset=0&limit=20
```
<hr>


Other REM servers {#other}
-------------------------------------------

There are more servers doing the same thing.

* [REM REST API](http://rem-rest-api.herokuapp.com/)

<hr>
