<style>
    .styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}

.styled-table th,
.styled-table td {
    padding: 12px 15px;
}

.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}

.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}
</style>

<?php
function prepareAttribute($data, $is_mandatory = true)
{
    $attribute = '';
    if (!empty($data)) {
        foreach ($data as $name => $value) {
            if (empty($name) || empty($value)) {
                echo "Error: Invalid array format!";
                break;
            }
            
            if ($is_mandatory || $data) {
                $attribute = ' ' . $name . '="' . htmlspecialchars($value) . '"';
            }
        }
        return $attribute;
    } else {
        // Array is empty
        echo "Error: Array is empty!";
    }
}

function renderTable($data, $column, $header, $number, $name, $attVal){
    echo '
    <table class="styled-table">
        <thead>
            <tr>';
    foreach ($header as $value) {
        echo '<th>' . $value . '</th>';
    }
    echo '      </tr>
        </thead>
        <tbody>
            <tr>
                <td>Dom</td>
                <td>6000</td>
            </tr>
            <tr class="active-row">
                <td>Melissa</td>
                <td>5150</td>
            </tr>
        </tbody>
    </table>
';
}


$header = array('ikan', 'kucing', 'anjing');
// renderTable('ikan', 'ikan', $header);

?>
<?php

// Sample data
$data = array(
    array('Dom', 6000),
    array('Melissa', 5150)
);

$column = array('Name', 'Points');

$header = array('Player', 'Score');

$attributes = array(
    0 => array('class', 'first-column'),
    1 => array('class', 'second-column')
);

// Function to render table
function renderTable1($data, $column, $header, $attributes)
{
    echo '
    <table class="styled-table">
        <thead>
            <tr>';
    foreach ($header as $value) {
        echo '<th>' . $value . '</th>';
    }
    echo '      </tr>
        </thead>
        <tbody>';

    foreach ($data as $row_index => $row) {
        echo '<tr>';
        foreach ($row as $cell_index => $cell_value) {
            $attribute_name = isset($attributes[$cell_index]) ? $attributes[$cell_index][0] : null;
            $attribute_value = isset($attributes[$cell_index]) ? $attributes[$cell_index][1] : null;
            $tag_attributes = '';
            if ($attribute_name && $attribute_value) {
                $tag_attributes = $attribute_name . '="' . $attribute_value . '"';
            }
            echo '<td ' . $tag_attributes . '>' . $cell_value . '</td>';
        }
        echo '</tr>';
    }

    echo '</tbody></table>';
}

// Call the function
// renderTable1($data, $column, $header, $attributes);
?>
<?php
$data = array(
    array('Dom', 6000),
    array('Melissa', 5150),
    array('John', 4500)
);

$column = array('Name', 'Points');

$header = array('Player', 'Score');

$attributes = array(
    0 => array(
        array('class' => 'first-column'),
        array('class' => 'second-column')
    ),
    1 => array(
        array('class' => 'first-column'),
        array('class' => 'second-column')
    ),
    2 => array(
        array('class' => 'first-column', 'style' => 'font-weight:bold'),
        array('class' => 'second-column', 'style' => 'font-weight:bold')
    )
);

function renderTable3($data, $column, $header, $attributes)
{
    echo '
    <table class="styled-table">
        <thead>
            <tr>';
    foreach ($header as $value) {
        echo '<th>' . $value . '</th>';
    }
    echo '      </tr>
        </thead>
        <tbody>';

    foreach ($data as $row_index => $row) {
        echo '<tr>';
        foreach ($row as $cell_index => $cell_value) {
            $tag_attributes = '';
            if (isset($attributes[$row_index][$cell_index])) {
                foreach ($attributes[$row_index][$cell_index] as $attribute_name => $attribute_value) {
                    $tag_attributes .= $attribute_name . '="' . $attribute_value . '" ';
                }
            }
            echo '<td ' . $tag_attributes . '>' . $cell_value . '</td>';
        }
        echo '</tr>';
    }

    echo '</tbody></table>';
}

renderTable3($data, $column, $header, $attributes);
?>