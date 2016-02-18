# TYPO3 Extension "jwnewsevent"

This extension adds some more fields to Georg Ringers "news", to use them as event records, too.

## Install

After installing this extension you have to add the static extension template (TypoScript).
After that, all domain models from "news" will be links to the domain models of this extension.

## News fields

This extension add these new fields which you also can use in your templates:

* isEvent: You can set all types (default, internal and external) as an event record
* eventStart: Field for date and time
* eventEnd: Field for date and time
* organizer: A simple text field
* location: A simple text field
