<?php
//always include at the end to close and reset(can include in seperate file)
mysqli_free_result($result);
mysqli_close($conn);