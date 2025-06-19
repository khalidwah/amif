function login() {
  const name = document.getElementById("name").value.trim();
  const age = parseInt(document.getElementById("age").value, 10);
  const gender = document.getElementById("gender").value;

  if (age > 35) {
    document.getElementById("ageWarning").textContent = "لا يمكن دخول من يتجاوز عمره 35 سنة.";
    return;
  }

  if (name && age && gender) {
    localStorage.setItem("user", name);
    document.getElementById("welcomeUser").textContent = `مرحباً، ${name} 👋`;
    document.getElementById("loginPage").classList.add("hidden");
    document.getElementById("mainMenu").classList.remove("hidden");
  }
}

function logout() {
  localStorage.removeItem("user");
  location.reload();
}

function showChat() {
  document.getElementById("mainMenu").classList.add("hidden");
  document.getElementById("chatPage").classList.remove("hidden");
}

function goHome() {
  document.getElementById("chatPage").classList.add("hidden");
  document.getElementById("mainMenu").classList.remove("hidden");
}

function sendMessage() {
  const msg = document.getElementById("chatMessage").value.trim();
  if (!msg) return;
  const chatBox = document.getElementById("chatBox");
  const user = localStorage.getItem("user") || "مستخدم";
  chatBox.innerHTML += `<p><strong>${user}:</strong> ${msg}</p>`;
  document.getElementById("chatMessage").value = "";
  chatBox.scrollTop = chatBox.scrollHeight;
}

function openCompetitionForm() {
  document.getElementById("mainMenu").classList.add("hidden");
  document.getElementById("competitionPage").classList.remove("hidden");
}

function backToMain() {
  document.getElementById("competitionPage").classList.add("hidden");
  document.getElementById("mainMenu").classList.remove("hidden");
}

async function submitCompetition() {
  const name = document.getElementById("compName").value.trim();
  const surname = document.getElementById("compSurname").value.trim();
  const project = document.getElementById("compProject").value.trim();
  const idea = document.getElementById("compIdea").value.trim();
  const phone = document.getElementById("compPhone").value.trim();

  if (!name || !surname || !project || !idea || !phone) {
    document.getElementById("compStatus").style.color = "red";
    document.getElementById("compStatus").textContent = "يرجى ملء جميع الحقول.";
    return;
  }

  const formData = new FormData();
  formData.append("name", name);
  formData.append("surname", surname);
  formData.append("project", project);
  formData.append("idea", idea);
  formData.append("phone", phone);

  try {
    const response = await fetch("submit_competition.php", {
      method: "POST",
      body: formData,
    });
    const result = await response.text();
    document.getElementById("compStatus").style.color = "green";
    document.getElementById("compStatus").textContent = result;
  } catch (e) {
    document.getElementById("compStatus").style.color = "red";
    document.getElementById("compStatus").textContent = "حدث خطأ أثناء الإرسال.";
  }
}
