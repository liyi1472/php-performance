# PHP 静态方法和非静态方法的性能对比

**Static vs Non-static methods in PHP: what is faster?**

[https://www.codedwell.com/post/59/static-vs-non-static-methods-in-php](https://www.codedwell.com/post/59/static-vs-non-static-methods-in-php)



## 结论

PHP7以后，非静态方法只是略快于静态方法。

> １亿次循环，非静态方法领先１微秒。

不要追求这种微小的性能提升，还是要从语义上考虑。

**需要私有属性** => new 实例使用非静态方法。

**不需要私有属性** => 使用类静态方法。

