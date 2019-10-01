<?php
$user_table = [
    ['Margaret', 'Thatcher', 'female', 'politician'],
    ['Jack', 'Sparrow', 'male', 'pirate']
];

$user_html = [
    ['name' =>'Margaret',
     'surname' => 'Thatcher',
     'gender' => 'female',
     'profession' => 'politician'],
    ['name' => 'Jack',
     'surname' => 'Sparrow',
     'gender' => 'male',
     'profession' => 'pirate']
];

function showUsersTable($arr) {
    echo '<h1 style="text-align: center; padding-bottom: 5px; border-bottom: 1px solid #e8ebef; font-family: Helvetica;">Table</h1>';
    print_r('<table border="1">');
    print_r('
                <tr>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Gender</th>
                    <th>Profession</th>
                </tr>');
    foreach ($arr as $inner_arr) {
        print_r('<tr>');
        foreach ($inner_arr as $key => $value) {
            print_r('<td>' . $value . '</td>');
        }
        print_r('</tr>');
    }
    print_r('</table>');
}

function showUsersList($arr) {
    echo '<h1 style="text-align: center; padding-bottom: 5px; border-bottom: 1px solid #e8ebef; border-top: 1px solid #e8ebef; font-family: Helvetica;">List</h1>';
    foreach ($arr as $inner_arr) {
        print_r('<ul>');
        foreach ($inner_arr as $key => $value) {
            print_r('<li>' . $value . '</li>');
        }
        print_r('</ul>');
    }
}

function showUserHTML($arr) {
    echo '<h1 style="text-align: center; padding-bottom: 5px; border-bottom: 1px solid #e8ebef; border-top: 1px solid #e8ebef; font-family: Helvetica;">HTML Block</h1>';
    foreach ($arr as $inner_arr) {
        print_r('<div style="border-bottom: 1px solid #e8ebef;">');
        foreach ($inner_arr as $key => $value) {
            print_r('<div style="display: flex; flex-direction: row;">');
            print_r('<p style="font-weight: bold; padding-right: 10px;">' . $key . ': ' . '</p>');
            print_r('<p>' . $value . '</p>');
            print_r('</div>');
        }
        print_r('<img src="../images/img.jpg" alt="img">');
        print_r('</div>');
        print_r('</br>');
    }
}

echo showUsersTable($user_table);
echo showUsersList($user_table);
echo showUserHTML($user_html);