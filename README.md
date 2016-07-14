# Object Library

[![Build Status](https://travis-ci.org/activecollab/object.svg?branch=master)](https://travis-ci.org/activecollab/object)

`ActiveCollab\Object\ObjectInterface` interface defines methods that we can use to identify and compare objects:

1. `getId()`
1. `is()`

We extracted it in a package when we got a situation when we had these methods specified in more than two places, as parts of different interfaces.
