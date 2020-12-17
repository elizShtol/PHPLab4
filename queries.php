<?php
$readersQuery = "SELECT readers.id, readers.first_name, readers.last_name FROM `readers`";
$booksQuery = "SELECT DISTINCT res.id, res.name, res.pub_date, res.state, MAX(res.taken_at), res.last_name\n"

    . "FROM (SELECT books.id, books.name, books.pub_date, log.taken_at, \n"

    . "CASE\n"

    . "WHEN log.returned_at IS NULL AND log.taken_at IS NOT NULL\n"

    . "THEN \"Взята\"\n"

    . "ELSE  \"В наличии\"\n"

    . "END as state, readers.last_name\n"

    . "FROM books\n"

    . "LEFT JOIN (SELECT * FROM log_taking WHERE log_taking.returned_at is NULL) log ON log.reader_id = books.id\n"

    . "LEFT JOIN readers ON log.reader_id = readers.id) res\n"

    . "GROUP BY res.id";
$takenBooksQuery = "SELECT DISTINCT res.id, res.name, res.pub_date, res.state, MAX(res.taken_at), res.last_name\n"

    . "FROM (SELECT books.id, books.name, books.pub_date, log.taken_at, \n"

    . "CASE\n"

    . "WHEN log.returned_at IS NULL AND log.taken_at IS NOT NULL\n"

    . "THEN \"Нет в наличии\"\n"

    . "ELSE  \"В наличии\"\n"

    . "END as state, readers.last_name\n"

    . "FROM books\n"

    . "JOIN (SELECT * FROM log_taking WHERE log_taking.returned_at is NULL) log ON log.reader_id = books.id\n"

    . "JOIN readers ON log.reader_id = readers.id) res\n"

    . "GROUP BY res.id";