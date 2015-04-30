## What is UnrealMetrics

UnrealMetrics is an attempt to create a powerful web-based framework for gathering, viewing, interpreting and analysing user metrics from Unreal Engine 4-based games,
as well as provide facilities for tweaking and tuning from within the framework.

UnrealMetrics is based on Laravel 5 and is developed for NHTV University of Applied Sciences Breda by me as part of my Specialisation course.

## How it works

UnrealMetrics at its core provides nothing more than a RESTful API for the Unreal Engine 4 to interface with. In conjunction with my Unreal Engine 4-plugin
that allows communication with UnrealMetrics, it is possible to collect data live from all game instances being played.

## Goals of the project

1) Collect user metrics from Unreal Engine 4-based games
2) Give designers useful tools to analyse and compare user metrics between different versions of the game
3) Allow designers to tweak and fine tune the game by allowing the server to send new game settings to clients connected to the internet

## Current status

Nothing but the initial commit has been done. I need to create RESTful API's for both user metrics and game settings,
create a beautiful yet simple and powerful front-end for the viewing of user metrics. The engine plugin also needs to be updated to receive game settings.

## Installation / How to use

TODO

## Issues & Pull requests

All bug reports and issues are welcome. Not sure yet if I'm allowed to accept pull requests before I deliver the project to university.
Expect development to continue after delivery date. After this date all pull requests are welcome :)