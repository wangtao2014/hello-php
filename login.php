<form action="/dist/process.php" method="post">
    <p>
        <label for="teacher_id">课程教师编号:</label>
        <input type="text" name="teacher_id" id="teacher_id" />
    </p>
    <p>
        <label for="subject_name">课程名称:</label>
        <input type="text" name="subject_name" id="subject_name" />
    </p>
    <p>
        <label for="subject_time">课程时间:</label>
        <input type="text" name="subject_time" id="subject_time" />
    </p>
    <p>
        <label for="subject_desc">课程描述:</label>
        <input type="text" name="subject_desc" id="subject_desc" />
    </p>
    <p>
        <input type="submit" name="submit" value="添加" />
    </p>
</form>