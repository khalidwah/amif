<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>تمكين NEET</title>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <header>
    <h1>تمكين NEET</h1>
    <p>رحلة التمكين تبدأ بخطوة</p>
  </header>

  <div class="container" id="loginPage">
    <h2>تسجيل الدخول</h2>
    <input type="text" id="name" placeholder="الاسم الكامل" required />
    <input type="number" id="age" placeholder="العمر" required />
    <select id="gender">
      <option value="">اختر الجنس</option>
      <option value="ذكر">ذكر</option>
      <option value="أنثى">أنثى</option>
    </select>
    <button onclick="login()">دخول</button>
    <p id="ageWarning" style="color: red;"></p>
  </div>

  <div class="container hidden" id="mainMenu">
    <h2 id="welcomeUser"></h2>
    <div class="grid">
      <div class="card" onclick="alert('تشخيص ذكي لحالتك')">🔍 تشخيص ذكي</div>
      <div class="card" onclick="alert('توصيات تعليمية ذكية')">📘 توصيات تعليمية</div>
      <div class="card" onclick="showChat()">💬 دعم نفسي عبر الذكاء الاصطناعي</div>
      <div class="card" onclick="alert('فرص عمل وتدريب ذكية')">💼 فرص عمل ذكية</div>
      <div class="card" onclick="alert('ربط مع موجّه مناسب')">🤝 موجّه مناسب</div>
      <div class="card" onclick="alert('تحليل سلوك المستخدم')">📊 تحليل السلوك</div>
      <div class="card" onclick="alert('رسائل تحفيزية مخصصة')">🌟 رسائل تحفيزية</div>
    </div>
    <h3 style="margin-top:2em;">صفحات تمكين إضافية</h3>
    <div class="grid">
      <div class="card">تمكين الشباب</div>
      <div class="card">الإدماج الاجتماعي والاقتصادي</div>
      <div class="card">الادماج المالي</div>
      <div class="card">الإدماج النفسي</div>
      <div class="card">التشغيل والتدريب</div>
      <div class="card">ريادة الأعمال الاجتماعية</div>
      <div class="card">صحة الشباب</div>
      <div class="card">صحة المهاجرين الافارقة</div>
      <div class="card">العمل التطوعي</div>
      <div class="card">دوي الهمم والابتكار</div>
      <div class="card" onclick="openCompetitionForm()">مسابقة لتمويل الأفكار والمشاريع الصغرى</div>
    </div>
    <br>
    <button onclick="logout()">🚪 تسجيل الخروج</button>
  </div>

  <div class="container hidden" id="chatPage">
    <h3>💬 دردشة جماعية</h3>
    <div class="chat-box" id="chatBox"></div>
    <div class="chat-input">
      <input type="text" id="chatMessage" placeholder="أكتب رسالة..." />
      <button onclick="sendMessage()">إرسال</button>
    </div>
    <button onclick="goHome()">⬅ العودة</button>
  </div>

  <div class="container hidden" id="competitionPage">
    <h2>📌 التسجيل في المسابقة</h2>
    <input type="text" id="compName" placeholder="الاسم الكامل" required />
    <input type="text" id="compSurname" placeholder="النسب" required />
    <input type="text" id="compProject" placeholder="اسم المشروع أو الفكرة" required />
    <textarea id="compIdea" placeholder="نبذة عن الفكرة" rows="4"></textarea>
    <input type="tel" id="compPhone" placeholder="رقم الهاتف" required />
    <button onclick="submitCompetition()">📤 إرسال المشاركة</button>
    <p id="compStatus"></p>
    <br>
    <button onclick="backToMain()">⬅ العودة</button>
  </div>

  <script src="app.js"></script>
</body>
</html>
