<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transiitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>フォーム</title>
    </head>
    <body>
        <?php if (isset($_GET['name']) && strlen($_GET['name']) > 0): ?>
        <p><?php echo htmlspecialchars($_GET['name'], ENT_QUOTES, 'UTF-8'); ?> さんこんにちは</p>
        <?php endif; ?>

        <form action='0602_form.php' method='get'>
            <p>
                名前を入力してください：
                <input type='text' name='name' />
                <input type='submit' value='送信' />
            </p>
        </form>
    </body>
</html>
