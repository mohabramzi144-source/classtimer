<?php
// =========================================================================
// 1. تعريف مصفوفات البيانات الرئيسية (تم تحويل بيانات JavaScript إلى PHP)
// =========================================================================

// البيانات المستخرجة من الجداول المرفقة
$classSchedulesData = [
    "السادس أ" => [
        ["اجتماعيات (موفق)", "علوم (مضر)", "رياضيات (يوسف خواجة)", "رياضيات (عز)", "دين (الشرع)", "عربي (مشعل)", "دين (الشرع)", ""],
        ["E (يوسف خواجة)", "اجتماعيات (مؤمن)", "دين (الشرع)", "رياضيات (عز)", "علوم (مضر)", "عربي (مشعل)", "عربي (مشعل)", "فن (رمزي)"],
        ["رياضيات (عز)", "E (يوسف خواجة)", "نشاط (مشعل)", "عربي (مشعل)", "عربي (علاء الدين)", "رياضة (علاء الدين)", "E (يوسف خواجة)", "E (يوسف خواجة)"],
        ["رياضيات (عز)", "علوم (مضر)", "اجتماعيات (مؤمن)", "دين (الشرع)", "رياضيات (عز)", "عربي (مشعل)", "عربي (مشعل)", "E (مضر)"],
        ["رياضيات (عز)", "فن (رمزي)", "عربي (مشعل)", "رياضة (علاء الدين)", "E (عثمان)", "مهني (الصعوب)", "E (يوسف خواجة)", "E (يوسف خواجة)"]
    ],
    "السادس ب" => [
        ["E (مشهور)", "رياضيات (أحمد)", "اجتماعيات (مؤمن)", "رياضة (علاء الدين)", "مهني (الصعوب)", "عربي (مشعل)", "عربي (مشعل)", "عربي (مشعل)"],
        ["عربي (مشعل)", "اجتماعيات (مؤمن)", "دين (الشرع)", "رياضيات (أحمد)", "E (مشهور)", "علوم (مضر)", "علوم (مضر)", "عربي (مشعل)"],
        ["رياضيات (أحمد)", "نشاط (المسايد)", "دين (الشرع)", "E (مشهور)", "عربي (مشعل)", "رياضة (علاء الدين)", "عربي (مشعل)", "عربي (مشعل)"],
        ["اجتماعيات (مؤمن)", "E (مشهور)", "فن (رمزي)", "رياضيات (أحمد)", "علوم (مضر)", "عربي (مشعل)", "عربي (مشعل)", "عربي (مشعل)"],
        ["رياضيات (أحمد)", "عربي (مشعل)", "دين (الشرع)", "علوم (مضر)", "عربي (مشعل)", "E (مشهور)", "E (مشهور)", "رياضيات (أحمد)"]
    ],
    // باقي الفصول...
    "السابع أ" => [
        ["رياضيات (مالك)", "عربي (بشار)", "فن (رمزي)", "علوم (مضر)", "دين (محمد خير)", "E (عثمان)", "مهارات رقمية (الحداد)", ""],
        ["رياضيات (مالك)", "ثقافة مالية (حسني)", "عربي (بشار)", "E (عثمان)", "اجتماعيات (العابد)", "علوم (مضر)", "دين (محمد خير)", "رياضة (علاء الدين)"],
        ["رياضيات (مالك)", "نشاط (الصعوب)", "E (عثمان)", "عربي (بشار)", "اجتماعيات (العابد)", "علوم (مضر)", "علوم (مضر)", ""],
        ["رياضيات (مالك)", "علوم (مضر)", "دين (محمد خير)", "عربي (بشار)", "عربي (بشار)", "E (عثمان)", "اجتماعيات (العابد)", ""],
        ["مهني (الصعوب)", "عربي (بشار)", "E (عثمان)", "رياضيات (مالك)", "رياضة (علاء الدين)", "اجتماعيات (العابد)", "اجتماعيات (العابد)", ""]
    ],
    "السابع ب" => [
        ["علوم (مضر)", "E (عثمان)", "مهني (الصعوب)", "عربي (بشار)", "رياضيات (مالك)", "فن (رمزي)", "فن (رمزي)", "رياضة (علاء الدين)"],
        ["عربي (بشار)", "رياضيات (مالك)", "دين (محمد خير)", "اجتماعيات (العابد)", "عربي (بشار)", "E (عثمان)", "رياضة (علاء الدين)", "فن (رمزي)"],
        ["E (عثمان)", "نشاط (العابد)", "علوم (مضر)", "رياضيات (مالك)", "دين (محمد خير)", "عربي (بشار)", "رياضة (علاء الدين)", "رياضة (علاء الدين)"],
        ["علوم (مضر)", "عربي (بشار)", "اجتماعيات (العابد)", "رياضيات (مالك)", "مهارات رقمية (الحداد)", "E (عثمان)", "E (عثمان)", "رياضة (علاء الدين)"],
        ["علوم (مضر)", "رياضيات (مالك)", "E (عثمان)", "دين (محمد خير)", "اجتماعيات (العابد)", "عربي (بشار)", "ثقافة مالية (حسني)", "رياضة (علاء الدين)"]
    ],
    "السابع ج" => [
        ["علوم (المسايد)", "رياضة (علاء الدين)", "عربي (بشار)", "رياضيات (مالك)", "عثمان (عثمان)", "دين (محمد خير)", "اجتماعيات (العابد)", "اجتماعيات (العابد)"],
        ["دين (محمد خير)", "عربي (بشار)", "مهارات رقمية (الحداد)", "E (عثمان)", "رياضيات (مالك)", "مهني (الصعوب)", "مهني (الصعوب)", "مهني (الصعوب)"],
        ["علوم (المسايد)", "نشاط (مالك)", "اجتماعيات (العابد)", "E (عثمان)", "عربي (بشار)", "رياضيات (مالك)", "رياضيات (مالك)", "رياضيات (مالك)"],
        ["علوم (المسايد)", "رياضيات (مالك)", "عربي (بشار)", "E (عثمان)", "ثقافة مالية (حسني)", "عربي (بشار)", "عربي (بشار)", "عربي (بشار)"],
        ["اجتماعيات (العابد)", "عربي (بشار)", "رياضيات (مالك)", "فن (رمزي)", "دين (محمد خير)", "علوم (المسايد)", "E (عثمان)", "رياضة (علاء الدين)"]
    ],
    "السابع د" => [
        ["عربي (بشار)", "رياضيات (عز)", "دين (محمد خير)", "علوم (المسايد)", "E (يوسف خواجة)", "اجتماعيات (العابد)", "اجتماعيات (العابد)", "مهني (الصعوب)"],
        ["علوم (المسايد)", "دين (محمد خير)", "E (يوسف خواجة)", "عربي (بشار)", "رياضة (علاء الدين)", "اجتماعيات (العابد)", "اجتماعيات (العابد)", "رياضيات (عز)"],
        ["عربي (بشار)", "نشاط (عز)", "دين (محمد خير)", "E (يوسف خواجة)", "رياضيات (عز)", "مهارات رقمية (الحداد)", "مهارات رقمية (الحداد)", "مهارات رقمية (الحداد)"],
        ["رياضيات (عز)", "ثقافة مالية (حسني)", "E (يوسف خواجة)", "رياضة (علاء الدين)", "علوم (المسايد)", "اجتماعيات (العابد)", "اجتماعيات (العابد)", "عربي (بشار)"],
        ["عربي (بشار)", "E (يوسف خواجة)", "فن (رمزي)", "عربي (بشار)", "علوم (المسايد)", "رياضيات (عز)", "رياضيات (عز)", "اجتماعيات (العابد)"]
    ],
    "السابع هـ" => [
        ["عربي (فهد)", "ثقافة مالية (حسني)", "رياضة (علاء الدين)", "اجتماعيات (العابد)", "علوم (المسايد)", "E (يوسف خواجة)", "رياضيات (عز)", "فن (رمزي)"],
        ["رياضيات (عز)", "عربي (فهد)", "علوم (المسايد)", "E (يوسف خواجة)", "مهارات رقمية (الحداد)", "دين (الشرع)", "دين (الشرع)", "دين (الشرع)"],
        ["دين (الشرع)", "نشاط (يوسف خواجة)", "عربي (فهد)", "رياضة (علاء الدين)", "E (يوسف خواجة)", "رياضيات (عز)", "رياضيات (عز)", "رياضيات (عز)"],
        ["عربي (فهد)", "E (يوسف خواجة)", "رياضيات (عز)", "اجتماعيات (العابد)", "علوم (المسايد)", "مهني (الصعوب)", "علوم (المسايد)", "علوم (المسايد)"],
        ["عربي (فهد)", "علوم (المسايد)", "اجتماعيات (العابد)", "E (يوسف خواجة)", "رياضيات (عز)", "دين (الشرع)", "دين (الشرع)", "عربي (فهد)"]
    ],
    "السابع و" => [
        ["عربي (مشعل)", "E (يوسف خواجة)", "اجتماعيات (العابد)", "دين (الشرع)", "رياضة (علاء الدين)", "رياضيات (عز)", "علوم (المسايد)", "مهني (الصعوب)"],
        ["اجتماعيات (العابد)", "دين (الشرع)", "رياضيات (عز)", "عربي (مشعل)", "عربي (مشعل)", "E (يوسف خواجة)", "علوم (المسايد)", "علوم (المسايد)"],
        ["عربي (مشعل)", "نشاط (حسني)", "E (يوسف خواجة)", "رياضيات (عز)", "مهارات رقمية (محمد عبد الفتاح)", "رياضيات (عز)", "رياضيات (عز)", "رياضيات (عز)"],
        ["فن (رمزي)", "اجتماعيات (العابد)", "علوم (المسايد)", "رياضيات (عز)", "عربي (مشعل)", "E (يوسف خواجة)", "رياضة (علاء الدين)", "رياضة (علاء الدين)"],
        ["E (يوسف خواجة)", "دين (الشرع)", "علوم (المسايد)", "رياضيات (عز)", "ثقافة مالية (حسني)", "عربي (مشعل)", "عربي (مشعل)", "مهني (الصعوب)"]
    ]
];

$days = ["الأحد", "الإثنين", "الثلاثاء", "الأربعاء", "الخميس"];
$periods = ["الحصة 1", "الحصة 2", "الحصة 3", "الحصة 4", "الحصة 5", "الحصة 6", "الحصة 7", "الحصة 8"];
$periodTimes = [
    "8:30 - 9:05", "9:05 - 9:40", "9:40 - 10:15", "10:15 - 10:50", 
    "11:05 - 11:40", "11:40 - 12:15", "12:15 - 12:50", "12:50 - 1:25"
];

// -------------------------------------------------------------------------
// 2. ميزة تعديل اسم المعلم (PHP)
// -------------------------------------------------------------------------

// قائمة للمعلمين الذين يمكنك تعديل أسمائهم
$teachersList = [
    "موفق" => "موفق", "مضر" => "مضر", "يوسف خواجة" => "يوسف خواجة", "عز" => "عز", "الشرع" => "الشرع",
    "مشعل" => "مشعل", "مؤمن" => "مؤمن", "رمزي" => "رمزي", "علاء الدين" => "علاء الدين", "علاء الدين" => "علاء الدين", 
    "عثمان" => "عثمان", "الصعوب" => "الصعوب", "مشهور" => "مشهور", "أحمد" => "أحمد", "المسايد" => "المسايد", 
    "فهد" => "فهد", "الراعي" => "الراعي", "عوض" => "عوض", "محمد خير" => "محمد خير", "حسني" => "حسني", 
    "بشار" => "بشار", "مالك" => "مالك", "العابد" => "العابد", "محمد عبد الفتاح" => "محمد عبد الفتاح", "الحداد" => "الحداد"
];

// مصفوفة لتخزين الأسماء الجديدة
$newTeacherNames = [];
$message = "";

// معالجة طلب النموذج (POST) لتغيير اسم المعلم
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $oldName = isset($_POST['old_teacher_name']) ? trim($_POST['old_teacher_name']) : '';
    $newName = isset($_POST['new_teacher_name']) ? trim($_POST['new_teacher_name']) : '';

    if (!empty($oldName) && !empty($newName)) {
        if (array_key_exists($oldName, $teachersList)) {
            // سنخزن الاسم الجديد في مصفوفة مؤقتة (للعرض في هذه الصفحة فقط)
            // في تطبيق حقيقي، سيتم حفظه في قاعدة بيانات
            $newTeacherNames[$oldName] = $newName;
            $message = "<div style='color: green; font-weight: bold; margin-bottom: 10px;'>✅ تم تحديث اسم المعلم '{$oldName}' إلى '{$newName}' بنجاح للعرض.</div>";
        } else {
            $message = "<div style='color: red; font-weight: bold; margin-bottom: 10px;'>❌ المعلم '{$oldName}' غير موجود في القائمة.</div>";
        }
    } else {
        $message = "<div style='color: orange; font-weight: bold; margin-bottom: 10px;'>⚠️ يرجى إدخال كلا الاسمين.</div>";
    }
}

// دالة لتطبيق التعديلات على البيانات قبل عرضها
function applyTeacherNameChanges($data, $changes) {
    if (empty($changes)) {
        return $data;
    }

    $modifiedData = $data;
    foreach ($modifiedData as $className => $schedule) {
        foreach ($schedule as $dayIndex => $daySchedule) {
            foreach ($daySchedule as $periodIndex => $cellData) {
                if (preg_match('/(.+)\s+\((.+)\)/u', $cellData, $matches)) {
                    $subject = $matches[1];
                    $teacher = $matches[2];
                    
                    if (array_key_exists($teacher, $changes)) {
                        $newTeacher = $changes[$teacher];
                        $modifiedData[$className][$dayIndex][$periodIndex] = "{$subject} ({$newTeacher})";
                    }
                }
            }
        }
    }
    return $modifiedData;
}

// تطبيق التغييرات على البيانات الأصلية
$modifiedSchedulesData = applyTeacherNameChanges($classSchedulesData, $newTeacherNames);
// =========================================================================
?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>جداول الحصص وحالة الدوام (بيانات مُحدّثة)</title>
    <style>
        /* ---------------------- CSS عام ---------------------- */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f9;
            color: #333;
            margin: 0;
            padding: 20px;
            text-align: right;
        }

        .container {
            background-color: #ffffff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
            max-width: 1400px;
            margin: 20px auto;
        }

        h1, h2, h3 {
            color: #007bff;
            border-bottom: 2px solid #e9ecef;
            padding-bottom: 10px;
            margin-top: 30px;
        }

        /* ---------------------- CSS نموذج التعديل ---------------------- */
        .teacher-edit-form {
            background-color: #e6f3ff;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 30px;
            border: 1px solid #b3d7ff;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        .teacher-edit-form label {
            font-weight: bold;
            color: #0056b3;
            margin-left: 10px;
        }

        .teacher-edit-form input[type="text"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 250px;
        }
        
        .form-group {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 10px;
        }

        .teacher-edit-form button {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
            transition: background-color 0.3s;
            width: auto;
        }

        .teacher-edit-form button:hover {
            background-color: #1e7e34;
        }


        /* ---------------------- CSS العداد التنازلي ---------------------- */
        #countdown-container {
            background-color: #e6f3ff;
            padding: 25px;
            border-radius: 10px;
            margin-bottom: 30px;
            border: 1px solid #b3d7ff;
            text-align: center;
        }

        .countdown-display {
            font-size: 1.8em;
            font-weight: bold;
            color: #28a745;
            direction: ltr;
            padding: 10px;
            background-color: #ffffff;
            border-radius: 8px;
            display: inline-block;
            margin-top: 15px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .in-session {
            color: #dc3545;
            font-size: 1.5em;
            font-weight: bold;
        }

        /* ---------------------- CSS الجداول ---------------------- */
        .schedule-section {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 20px;
            justify-content: center;
        }

        .class-schedule {
            flex: 1 1 550px;
            border: 1px solid #ccc;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            margin-bottom: 20px;
        }

        .class-schedule h3 {
            background-color: #007bff;
            color: white;
            padding: 15px;
            margin: 0;
            text-align: center;
            border-bottom: none;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.8em; 
            text-align: center;
            table-layout: fixed;
        }

        th, td {
            padding: 5px 2px; 
            border: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
            color: #555;
        }
        
        .cell-content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            line-height: 1.2;
        }

        .subject {
            font-weight: bold;
            color: #0056b3;
        }

        .teacher {
            font-size: 0.9em;
            color: #6c757d;
            margin-top: 2px;
        }

        .no-class {
            background-color: #f9f9f9;
            color: #aaa;
        }
        
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1 style="text-align: center;">حالة الدوام والعد التنازلي</h1>
        <div id="countdown-container">
            <div id="status-message">
                <h2>جاري التحقق من حالة الدوام...</h2>
            </div>
        </div>

        <h1 style="margin-top: 50px;">تعديل اسم المعلم</h1>
        <div class="teacher-edit-form">
            <?php echo $message; ?>
            <form method="POST" action="">
                <div class="form-group">
                    <label for="old_teacher_name">الاسم الحالي للمعلم (مثل: موفق):</label>
                    <input type="text" id="old_teacher_name" name="old_teacher_name" required list="teacher-names">
                    <datalist id="teacher-names">
                        <?php 
                        // عرض قائمة بأسماء المعلمين المتاحين للتعديل
                        foreach (array_keys($teachersList) as $name) {
                            echo "<option value=\"{$name}\">";
                        }
                        ?>
                    </datalist>
                </div>
                <div class="form-group">
                    <label for="new_teacher_name">الاسم الجديد المراد إظهاره:</label>
                    <input type="text" id="new_teacher_name" name="new_teacher_name" required>
                </div>
                <button type="submit">تعديل الاسم وعرضه في الجداول</button>
            </form>
        </div>

        <h1>جميع جداول الحصص</h1>

        <div id="schedules-area">
            <?php
            // =========================================================
            // 4. دالة بناء الجداول ديناميكياً (PHP)
            // =========================================================
            function createSchedules($data, $days, $periods, $periodTimes) {
                $output = '<div class="schedule-section">';
                foreach ($data as $className => $scheduleData) {
                    $output .= '
                        <div class="class-schedule">
                            <h3>' . htmlspecialchars($className) . '</h3>
                            <table>
                                <thead>
                                    <tr>
                                        <th style="width: 10%;">اليوم/الحصة</th>';
                    
                    foreach ($periods as $i => $p) {
                        $title = isset($periodTimes[$i]) ? $periodTimes[$i] : '';
                        $output .= '<th title="' . htmlspecialchars($title) . '">' . ($i + 1) . ' (' . explode(' ', $p)[1] . ')</th>';
                    }
                    
                    $output .= '
                                    </tr>
                                </thead>
                                <tbody>';
                    
                    foreach ($days as $dayIndex => $day) {
                        $output .= '<tr><th>' . htmlspecialchars($day) . '</th>';
                        
                        foreach ($periods as $periodIndex => $period) {
                            $cellData = isset($scheduleData[$dayIndex][$periodIndex]) ? $scheduleData[$dayIndex][$periodIndex] : '';
                            
                            $content = '<div class="cell-content">-</div>';
                            $className = 'no-class';

                            if (!empty(trim($cellData))) {
                                $className = '';
                                // استخراج المادة والمعلم
                                if (preg_match('/(.+)\s+\((.+)\)/u', $cellData, $matches)) {
                                    $subject = trim($matches[1]);
                                    $teacher = trim($matches[2]);
                                    $content = '<div class="cell-content"><span class="subject">' . htmlspecialchars($subject) . '</span><span class="teacher">(' . htmlspecialchars($teacher) . ')</span></div>';
                                } else {
                                    $content = '<div class="cell-content"><span class="subject">' . htmlspecialchars($cellData) . '</span></div>';
                                }
                            }
                            
                            $output .= '<td class="' . htmlspecialchars($className) . '">' . $content . '</td>';
                        }
                        
                        $output .= '</tr>';
                    }
                    
                    $output .= '</tbody></table></div>';
                }
                $output .= '</div>';
                echo $output;
            }

            // عرض الجداول باستخدام البيانات المعدلة
            createSchedules($modifiedSchedulesData, $days, $periods, $periodTimes);
            ?>
        </div>
        
    </div>
    
    <script>
        // ----------------------------------------------------
        // 1. تعريف الجدول الزمني للدوام (الأوقات الجديدة)
        // ----------------------------------------------------

        // مدة الحصة 35 دقيقة، مدة الفرصة 15 دقيقة
        const PERIOD_DURATION_MINUTES = 35; 

        const schoolSchedule = {
            // الدوام الصباحي (التركيز على بداية الحصة أو الطابور) - 24 ساعة
            Morning: [
                { name: 'الطابور الصباحي', isPeriod: false, startHour: 8, startMinute: 15, endHour: 8, endMinute: 30 },
                { name: 'الحصة الأولى', isPeriod: true, startHour: 8, startMinute: 30, endHour: 9, endMinute: 5 },
                { name: 'الحصة الثانية', isPeriod: true, startHour: 9, startMinute: 5, endHour: 9, endMinute: 40 },
                { name: 'الحصة الثالثة', isPeriod: true, startHour: 9, startMinute: 40, endHour: 10, endMinute: 15 },
                { name: 'الحصة الرابعة', isPeriod: true, startHour: 10, startMinute: 15, endHour: 10, endMinute: 50 },
                { name: 'الفرصة (الاستراحة)', isPeriod: false, startHour: 10, startMinute: 50, endHour: 11, endMinute: 5 },
                { name: 'الحصة الخامسة', isPeriod: true, startHour: 11, startMinute: 5, endHour: 11, endMinute: 40 },
                { name: 'الحصة السادسة', isPeriod: true, startHour: 11, startMinute: 40, endHour: 12, endMinute: 15 },
                { name: 'الحصة السابعة', isPeriod: true, startHour: 12, startMinute: 15, endHour: 12, endMinute: 50 },
                // نهاية الدوام 12:50
            ],
            // الدوام المسائي
            Evening: [
                { name: 'الطابور المسائي', isPeriod: false, startHour: 12, startMinute: 50, endHour: 13, endMinute: 5 },
                { name: 'الحصة الأولى', isPeriod: true, startHour: 13, startMinute: 5, endHour: 13, endMinute: 40 },
                { name: 'الحصة الثانية', isPeriod: true, startHour: 13, startMinute: 40, endHour: 14, endMinute: 15 },
                { name: 'الحصة الثالثة', isPeriod: true, startHour: 14, startMinute: 15, endHour: 14, endMinute: 50 },
                { name: 'الحصة الرابعة', isPeriod: true, startHour: 14, startMinute: 50, endHour: 15, endMinute: 25 },
                { name: 'الفرصة (الاستراحة)', isPeriod: false, startHour: 15, startMinute: 25, endHour: 15, endMinute: 40 },
                { name: 'الحصة الخامسة', isPeriod: true, startHour: 15, startMinute: 40, endHour: 16, endMinute: 15 },
                { name: 'الحصة السادسة', isPeriod: true, startHour: 16, startMinute: 15, endHour: 16, endMinute: 50 },
                { name: 'الحصة السابعة', isPeriod: true, startHour: 16, startMinute: 50, endHour: 17, endMinute: 25 },
                // نهاية الدوام 5:25 مساءً
            ]
        };

        // ----------------------------------------------------
        // 2. دالة إيجاد الفترة القادمة (مُحدثة للجدول الجديد)
        // ----------------------------------------------------
        function getNextPeriodInfo() {
            const now = new Date();
            const currentDay = now.getDay(); // 0=الأحد, 1=الإثنين, ..., 5=الجمعة, 6=السبت

            // التحقق من أيام العطلة (الجمعة 5 والسبت 6)
            if (currentDay === 5 || currentDay === 6) {
                const daysUntilSunday = currentDay === 6 ? 1 : 2;  
                const nextSunday = new Date(now);
                nextSunday.setDate(now.getDate() + daysUntilSunday);
                const firstActivity = schoolSchedule.Morning[0];
                const nextPeriodTime = new Date(nextSunday.getFullYear(), nextSunday.getMonth(), nextSunday.getDate(), firstActivity.startHour, firstActivity.startMinute, 0, 0);
                return { isInSession: false, nextPeriod: nextPeriodTime, sessionType: 'Morning', nextActivityName: firstActivity.name };
            }
            
            let nextActivityTime = null;
            let sessionType = null;
            let nextActivityName = null;
            let isInSession = false;

            const allTodayActivities = [];
            for (const [type, activities] of Object.entries(schoolSchedule)) {
                activities.forEach(activity => {
                    const activityStart = new Date(now.getFullYear(), now.getMonth(), now.getDate(), activity.startHour, activity.startMinute, 0, 0);
                    const activityEnd = new Date(now.getFullYear(), now.getMonth(), now.getDate(), activity.endHour, activity.endMinute, 0, 0);
                    allTodayActivities.push({ 
                        ...activity, 
                        type: type, 
                        start: activityStart, 
                        end: activityEnd 
                    });
                });
            }
            
            allTodayActivities.sort((a, b) => a.start.getTime() - b.start.getTime());

            if (allTodayActivities.length > 0) {
                const firstStart = allTodayActivities[0].start;
                const endOfSession = allTodayActivities[allTodayActivities.length - 1].end;

                if (now >= firstStart && now < endOfSession) {
                    isInSession = true;
                }
            }
            
            for (const activity of allTodayActivities) {
                if (now >= activity.start && now < activity.end) {
                    // نحن داخل هذا النشاط حاليًا
                    return { isInSession: true, nextPeriod: activity.end, sessionType: activity.type, nextActivityName: activity.name, isEnding: true };
                }
                if (activity.start > now) {
                    // هذا هو النشاط التالي الذي لم يبدأ بعد
                    nextActivityTime = activity.start;
                    sessionType = activity.type;
                    nextActivityName = activity.name;
                    break;
                }
            }
            
            if (!nextActivityTime) {
                const daysUntilSunday = (7 - currentDay) % 7;  
                const nextSunday = new Date(now);
                nextSunday.setDate(now.getDate() + daysUntilSunday);
                const firstActivity = schoolSchedule.Morning[0];
                nextActivityTime = new Date(nextSunday.getFullYear(), nextSunday.getMonth(), nextSunday.getDate(), firstActivity.startHour, firstActivity.startMinute, 0, 0);
                sessionType = 'Morning';
                nextActivityName = firstActivity.name;
            }

            return { isInSession: isInSession, nextPeriod: nextActivityTime, sessionType: sessionType, nextActivityName: nextActivityName, isEnding: false };
        }

        // ----------------------------------------------------
        // 3. دالة تحديث العرض والعداد التنازلي
        // ----------------------------------------------------
        function updateDisplay() {
            const statusDiv = document.getElementById('countdown-container');
            const { isInSession, nextPeriod, sessionType, nextActivityName, isEnding } = getNextPeriodInfo();

            if (nextPeriod) {
                const now = new Date();
                const timeRemaining = nextPeriod.getTime() - now.getTime();

                let seconds = Math.floor((timeRemaining / 1000) % 60);
                let minutes = Math.floor((timeRemaining / (1000 * 60)) % 60);
                let hours = Math.floor((timeRemaining / (1000 * 60 * 60)) % 24);
                let days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));

                const periodTimeStr = nextPeriod.toLocaleTimeString('ar-EG', { hour: '2-digit', minute: '2-digit', hour12: true });
                const isToday = nextPeriod.getDate() === now.getDate();
                const daysOfWeek = ["الأحد", "الإثنين", "الثلاثاء", "الأربعاء", "الخميس", "الجمعة", "السبت"];
                const dayName = daysOfWeek[nextPeriod.getDay()];
                
                let dateLabel = '';
                if (isToday) {
                    dateLabel = "اليوم";
                } else if (days > 0) {
                    dateLabel = ` (${dayName})`;
                } else {
                    dateLabel = "غدًا";
                }


                const countdownStr = (days > 0 ? `${days} يوم و ` : '') +
                                        `${String(hours).padStart(2, '0')} ساعة و ` +
                                        `${String(minutes).padStart(2, '0')} دقيقة و ` +
                                        `${String(seconds).padStart(2, '0')} ثانية`;

                const sessionLabel = sessionType === 'Morning' ? 'الصباحية' : 'المسائية';
                const action = isEnding ? `انتهاء **${nextActivityName}**` : `بداية **${nextActivityName}**`;

                statusDiv.innerHTML = `
                    <h1>${isEnding ? '⌛ عد تنازلي للانتهاء' : '⏰ انتظار الدوام القادم'}</h1>
                    <p>🔔 ${isEnding ? 'الوقت الحالي ضمن الدوام.' : '**لا يوجد دوام حاليًا.**'}</p>
                    <p>**موعد ${action} (${sessionLabel}):**</p>
                    <p style="font-size: 1.3em; font-weight: 600;">${periodTimeStr} ${dateLabel}</p>
                    <p style="margin-top: 30px; margin-bottom: 10px;">**العد التنازلي المتبقي:**</p>
                    <div class="countdown-display">${countdownStr}</div>
                `;
            } else {
                statusDiv.innerHTML = `
                    <h1>⚠️ **انتبه**</h1>
                    <p class="in-session">لا يوجد فترات عمل مجدولة لهذا اليوم أو اليوم التالي في النظام.</p>
                `;
            }
        }

        // ----------------------------------------------------
        // 4. تشغيل العداد التنازلي
        // ----------------------------------------------------
        
        // تم نقل بناء الجداول إلى PHP
        
        updateDisplay();
        setInterval(updateDisplay, 1000);

    </script>
</body>
</html>
