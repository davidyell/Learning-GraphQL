# Learning GraphQL with Laravel and Livewire

This is an example app to learn more about creating GraphQL Api endpoints using Laravel.

## What is it?

A graphql api for Magic the Gathering Cards!

## Install

-   Clone repo
-   `composer install`
-   `./vendor/bin/sail up -d`
-   `./vendor/bin/sail npm run build`

Visit http://localhost

## GraphQL

The project includes [GraphIQL](https://github.com/mll-lab/laravel-graphiql), you can make use of the client by installing Composer `dev` dependancies and
then visit http://localhost/graphiql

### Example queries

Get all the cards, but only a few fields.

```graphql
{
    cards {
        id
        name
        colorIdentity
        rarity
        convertedManaCost
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

## References

🎓 Learn to play Magic the Gathering! https://magic.wizards.com/en/intro

🙅 Not officially affiliated or endorsed by Wizards of the Coast or Magic the Gathering

🙇‍♂️ Thanks to MTGJSON for their free data https://mtgjson.com/downloads/all-files/
