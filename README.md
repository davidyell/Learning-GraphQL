# Learning GraphQL with Laravel and Livewire

This is an example app to learn more about creating GraphQL Api endpoints using Laravel.

## What is it?

A graphql api for Magic the Gathering Cards!

## Install

-   Clone repo
-   `composer install`
-   `./vendor/bin/sail up -d`
-   `./vendor/bin/sail artisan migrate:fresh --seed`
-   `./vendor/bin/sail npm run build`

Visit http://localhost

## Fake data

There is a card seeder which will create 100 random cards, using Faker data.

`./vendor/bin/sail artisan db:seed --seeder FakeCardSeeder`

## Real data

If you want to use actual data you will need to download two files.

* The 'Standard' format json from https://mtgjson.com/downloads/all-files/#standard (39mb)
* the 'SetList' format json from https://mtgjson.com/downloads/all-files/#setlist (9mb)

Save them into the `/app/database` folder and run the seeder `artisan db:seed StandardSeeder` which will 
populate the database with all the cards from the Standard format.

[More info on WhatsInStandard.com](https://whatsinstandard.com/)

## GraphQL

The project includes [GraphIQL](https://github.com/mll-lab/laravel-graphiql), you can make use of the client by installing Composer `dev` dependancies and
then visit http://localhost/graphiql

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
  setName(name: "kami") {
    name
    block
    code
  }
}
```

## References

🎓 Learn to play Magic the Gathering! https://magic.wizards.com/en/intro

🙅 Not officially affiliated or endorsed by Wizards of the Coast or Magic the Gathering

🙇‍♂️ Thanks to MTGJSON for their free data https://mtgjson.com/downloads/all-files/
