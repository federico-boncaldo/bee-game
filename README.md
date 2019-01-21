# The Bee Game

A PHP implementation of the bee game.

Once the application is opened in the browser you will see 14 bees which belong to three groups:

**Queen Bee**:

* Lifespan of __100 Hit Points__;
* When she is hit, __8 Hit Points__ are deducted for her lifespan;
* When the queen run out of Hit Points, all the other bees run out of Hit Points automatically;
* There is only __1__ bee of this type;

**Worker Bee**:

* Lifespan of __75 Hit Points__;
* When it is hit, __10 Hit Points__ are deducted for its lifespan;
* There are __5__ bees of this type;

**Drone Bee**:

* Lifespan of __50 Hit Points__;
* When it is hit, __12 Hit Points__ are deducted for its lifespan;
* There are __8__ bees of this type;

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