# YGS Lunar Admin

Gregory Scott fork of [Lunar Admin Panel](https://github.com/lunarphp/admin).

## Overview

This is a fork of `lunarphp/lunar` (admin) v1.1.0, customized for Gregory Scott projects.

**Package Name**: `ygs/lunar-admin`  
**Base Version**: `1.1.0`  
**YGS Version**: `1.1.0-ygs1`  

## Installation

Add to your `composer.json`:

```json
{
    "repositories": [
        {
            "type": "vcs",
            "url": "git@github.com:TheYGSGroup/lunar-core.git"
        },
        {
            "type": "vcs",
            "url": "git@github.com:TheYGSGroup/lunar-admin.git"
        }
    ],
    "require": {
        "ygs/lunar-core": "1.1.0-ygs1",
        "ygs/lunar-admin": "1.1.0-ygs1"
    }
}
```

**Note**: `ygs/lunar-admin` requires `ygs/lunar-core` (not `lunarphp/core`).

## Versioning

- Base version matches upstream Lunar (e.g., `1.1.0`)
- YGS suffix indicates our fork version (e.g., `-ygs1`, `-ygs2`)
- Example: `1.1.0-ygs1` = upstream 1.1.0, first YGS release

## Changes from Upstream

See [CHANGELOG.md](CHANGELOG.md) for YGS-specific modifications.

## Upstream

Forked from: https://github.com/lunarphp/admin  
Original License: MIT
