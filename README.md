# Medium To Mysql

Medium yazılarınızı veritabanına aktarmanızı sağlar.

## Kurulum

1. cron.php'nin 3. satırından medium kullanıcı adınızı değiştirin.

```bash
$content = file_get_contents("https://medium.com/feed/@bugresearch");
```

2. config.php dosyasından Mysql bağlantı ayarlarınızı yapın.
```bash
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "test";
```

3. data.sql dosyasını veritabanınızın içine aktarın.
4. Saatlik cron olarak cron.php'yi ayarlayın.

## Kullanım

Veriler veritabanına title, slug url, image, date ve content olarak kaydedilecektir. Buradan sonra kendi içerik yönetim sisteminizi yazabilir veya Wordpress gibi bilindik CMS'lere entegre edebilirsiniz.


## License
[MIT](https://choosealicense.com/licenses/mit/)
