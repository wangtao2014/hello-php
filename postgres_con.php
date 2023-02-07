<?php

# Connect to the database
function connect_to_db(): PgSql\Connection
{
    $host = "host = 127.0.0.1";
    $port = "port = 5432";
    $dbname = "dbname = postgres";
    $credentials = "user = postgres password = wangtao";

    $db = pg_connect("$host $port $dbname $credentials");

    if ($db) {
        echo "Connected to $dbname at $host successfully.\n";
    } else {
        echo "ERROR: Could not connect to the database.\n";
    }

    return $db;
}

# SELECT Operation

function select_course_operation(): void
{
    $sql = <<<EOF
      SELECT * from public.course ORDER BY id ASC;
EOF;

    $db = connect_to_db();
    $ret = pg_query($db, $sql);
    if (!$ret) {
        echo pg_last_error($db);
        exit;
    }

    while ($row = pg_fetch_row($ret)) {
        echo "id = " . $row[0] . "\n";
        echo "teacher_id = " . $row[1] . "\n";
        echo "name = " . $row[2] . "\n";
        echo "time = " . $row[3] . "\n";
        echo "description = " . $row[4] . "\n";
    }
    echo "Operation done successfully\n";
    pg_close($db);
}

# INSERT Operation

function insert_course_operation(): void
{
    $sql = <<<EOF
      INSERT INTO public.course (teacher_id, name, time, description)
      VALUES (2, 'Math', '2020-01-01', 'Math is a good subject.');
EOF;

    $db = connect_to_db();
    $ret = pg_query($db, $sql);
    if (!$ret) {
        echo pg_last_error($db);
    } else {
        echo "Records created successfully\n";
    }
    pg_close($db);
}

# INSERT Operation with parameters

function insert_course_with_params($teacher_id, $subject_name, $subject_time, $subject_desc): false|PgSql\Result
{
    $sql = <<<EOF
      INSERT INTO public.course (teacher_id, name, time, description)
      VALUES ($teacher_id, '$subject_name', '$subject_time', '$subject_desc');
EOF;

    $db = connect_to_db();
    $ret = pg_query($db, $sql);
    if (!$ret) {
        echo pg_last_error($db);
        exit;
    } else {
        echo "Records created successfully\n";
    }
    pg_close($db);

    return $ret;
}

# UPDATE Operation

function update_course_operation(): void
{
    $sql = <<<EOF
      UPDATE public.course set name = 'Mathematics' where id = 2;
EOF;

    $db = connect_to_db();
    $ret = pg_query($db, $sql);
    if (!$ret) {
        echo pg_last_error($db);
        exit;
    } else {
        echo "Records update successfully\n";
    }
    pg_close($db);
}