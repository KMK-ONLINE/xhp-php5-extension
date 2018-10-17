--TEST--
PHP7.1 Nullable Scalar Types
--SKIPIF--
<?php
if (version_compare(PHP_VERSION, '7.1', '<')) exit("Skip This test is for at least PHP 7.1.");
?>
--FILE--
<?php // xhp
class :foo {
  static function bar(?string $param): ?string {
    if ($param === null) {
      echo "is null\n";
    } else {
      echo "is not null\n";
    }
    return null;
  }
}

:foo::bar(null);
:foo::bar('foo');
--EXPECT--
is null
is not null
