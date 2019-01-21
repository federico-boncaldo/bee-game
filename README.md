# The Bee Game

A PHP implementation of the bee game.

Once the application is opened in the browser you will see 14 bees which belong to three groups:

**Queen Bee**:

* Lifespan of _100 Hit Points_;
* When she is hit, _8 Hit Points_ are deducted for her lifespan;
* When the queen run out of Hit Points, all the other bees run out of Hit Points automatically;
* There is only _1_ bee of this type;

**Worker Bee**:

* Lifespan of _75 Hit Points_;
* When it is hit, _10 Hit Points_ are deducted for its lifespan;
* There are _5_ bees of this type;

**Drone Bee**:

* Lifespan of _50 Hit Points_;
* When it is hit, _12 Hit Points_ are deducted for its lifespan;
* There are _8_ bees of this type;

## How to use the software

A hit button will be displayed on the application page. The button will randomly hit one bee.
Once all the bees finish their points or the queen run out of points the game will reset itself with full life bees.

## How to run the software

In order to use the software download the repo in a local folder.

Then run this command in the command line from the base folder:

php -S localhost:8888

The command will run a local web server and it will possible to access the application in the browser from:

http://localhost:8888/

## Requirements

PHP7 or greater is required to run  the software