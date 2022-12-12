# Authenticator

- Forked from [pfaffenrodt/authenticator](https://gitlab.com/pfaffenrodt/authenticator)
- Which was forked from [pgampe/authenticator](https://gitlab.com/pgampe/authenticator)

---

A TYPO3 CMS extension to implement a two-factor authentication compatible with Google Authenticator.

Setup
-----
Install the extension via composer

```
composer req liquidlight/typo3-authenticator
```

How to use it
-------------
As a backend user, go to the user settings module. Switch to the tab ``Two Factor``
and import your secret into your authenticator app. After that, check the enable two-factor checkmark.
Save your settings. Reload your backend, otherwise will you see strange behaviour.
