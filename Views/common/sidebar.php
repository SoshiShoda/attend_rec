<aside class="position-sticky col-2 p-4 text-center">
    <ul class="list-unstyled text-white text-decoration-none">
        <li>
            <p class="sidebar-text">氏名：<?php echo htmlspecialchars($view_user['family_name']); ?><?php echo htmlspecialchars($view_user['first_name']); ?></p>
        </li>
        <li>
            <p class="sidebar-text">社員番号：<?php echo htmlspecialchars($view_user['employee_id']); ?></p>
        </li>
        <li>
            <a href="home.php">
                <p class="sidebar-text">勤怠入力</p>
            </a>
        </li>
        <!-- <li>
            <a href="record.php">
                <p class="sidebar-text">勤怠照会</p>
            </a>
        </li> -->
        <li>
            <a href="profile.php">
                <p class="sidebar-text">社員情報</p>
            </a>
        </li>
        <li>
            <a href="sign-out.php">
                <p class="sidebar-text">ログアウト</p>
            </a>
        </li>
        <li>
            <a href="record.php">
                <p class="sidebar-text">勤怠情報一覧</p>
            </a>
        </li>
    </ul>
</aside>