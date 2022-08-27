# Tim for Hyperf

腾讯云 即时通信 IM SDK for Hyperf

[![Latest Stable Version](https://poser.pugx.org/chenjiacheng/hyperf-tim/v/stable.svg)](https://packagist.org/packages/chenjiacheng/hyperf-tim)
[![Latest Unstable Version](https://poser.pugx.org/chenjiacheng/hyperf-tim/v/unstable.svg)](https://packagist.org/packages/chenjiacheng/hyperf-tim)
[![Total Downloads](https://poser.pugx.org/chenjiacheng/hyperf-tim/downloads)](https://packagist.org/packages/chenjiacheng/hyperf-tim)
[![License](https://poser.pugx.org/chenjiacheng/hyperf-tim/license)](https://packagist.org/packages/chenjiacheng/hyperf-tim)

## 运行环境

- PHP >= 8.0.2
- [Composer](https://getcomposer.org/) >= 2.0
- Hyperf >= 2.2

## 安装方式

```bash
composer require chenjiacheng/hyperf-tim
```

### Hyperf

发布组件配置文件

```bash
php bin/hyperf.php vendor:publish chenjiacheng/hyperf-tim
```

## 使用示例

```php
<?php

declare(strict_types=1);

namespace App\Controller;

use Chenjiacheng\HyperfTim\Tim;

class TimController extends AbstractController
{
    public function testImport(Tim $tim)
    {
        // 第一种方式
        $result1 = $tim->account->import('101');
        var_dump($result1);

        // 第二种方式
        $result2 = make(Tim::class)->account->import('102');
        var_dump($result2);

        // 第三种方式
        $result3 = make(\Chenjiacheng\Tim\Tim::class)->account->import('103');
        var_dump($result3);

        return [];
    }
}
```

更多示例请查看 [https://github.com/chenjiacheng/tim](https://github.com/chenjiacheng/tim)

## License

MIT