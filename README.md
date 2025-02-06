# Learning GraphQL with Laravel and Livewire

This is an example app to learn more about creating GraphQL API endpoints using Laravel.

![tests](https://github.com/davidyell/Learning-GraphQL/actions/workflows/test.yml/badge.svg)
![quality](https://github.com/davidyell/Learning-GraphQL/actions/workflows/code-quality.yml/badge.svg)

## What is it?

A GraphQL API for Magic: The Gathering cards!

## Requirements

* PHP 8.4
* Composer
* Docker

## Install

- Clone the repo
- `composer install`
- `./vendor/bin/sail up -d`
- `./vendor/bin/sail artisan migrate:fresh --seed`
- `./vendor/bin/sail npm run build`

Visit http://localhost

## Fake data

There is a card seeder that will create 100 random cards using Faker data.

`./vendor/bin/sail artisan db:seed --seeder FakeCardSeeder`

## Real data

If you want to use actual data, you will need to download two files:

* The 'Standard' JSON from https://mtgjson.com/downloads/all-files/#standard (39MB)
* The 'SetList' JSON from https://mtgjson.com/downloads/all-files/#setlist (9MB)

Save them into the `/app/database` folder and run the seeder `artisan db:seed StandardSeeder`, which will populate the database with all the cards from the Standard format.

[More info on WhatsInStandard.com](https://whatsinstandard.com/)

## GraphQL

The project includes [GraphIQL](https://github.com/mll-lab/laravel-graphiql). You can make use of the client by installing Composer `dev` dependencies and then visiting http://localhost/graphiql.

### Authentication

The `/graphql` endpoint is secured with a Laravel Sanctum token auth. You will need to login and generate a token, and send this token with your requests as the Authorization header.

```http request
Authorization: Bearer <your-token>
```

### Example queries

Get all the cards, but only a few fields, paginated by 20 per page on page 4, and include the set the card belongs to.

```graphql
{
    cards(first:20, page: 4) {
        data {
            id
            name
            types
            set {
                block
                mcmName
                code
                parentCode
            }
        }
        paginatorInfo {
            currentPage
            lastPage
        }
    }
}
```

Get just a single card

```graphql
{
    card(id: 3) {
        id
        name
        flavorName
        flavorText
    }
}
```

Create a new user

```graphql
mutation {
  createUser(name:"David", email:"neon1024@gmail.com", password:"GiantBananaBoat") {
    name
    email
    created_at
    updated_at
  }
}
```

Get a list of the first 10 sets, and their parent sets.

```graphql
{
  sets(first: 10, page: 1) {
    data {
      code
      name
      parentCode
      parent {
        code
        name
      }
    }
  }
}
```

Get a single set and cards in that set.

```graphql
{
  set(code: "BIG") {
    name
    code
    cards {
      name
      manaCost
      type
    }
  }
}
```

Search for sets which contain `kami` anywhere in their name

```graphql
{
  setNameContains(name: "kami") {
    name
    block
    code
  }
}
```

Find all the red dragons

```graphql
{
  cardSearch(name: "dragon", colors: ["R"]) {
    id
    name
    type
    colors
  }
}
```

## References

🎓 Learn to play Magic the Gathering! https://magic.wizards.com/en/intro

🙅 Not officially affiliated or endorsed by Wizards of the Coast or Magic the Gathering

🙇‍♂️ Thanks to MTGJSON for their free data https://mtgjson.com/downloads/all-files/

🎁 Thanks to Andrew Gioia for his excellent mana & keyrune packages https://github.com/andrewgioia/
