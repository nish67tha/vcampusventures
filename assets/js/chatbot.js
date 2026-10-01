document.addEventListener("DOMContentLoaded", function () {

    const chatbot = document.querySelector(".vc-chatbot");
    const toggle = document.getElementById("vcChatbotToggle");
    const minimize = document.getElementById("vcChatbotMinimize");

    const input = document.getElementById("vcChatbotInput");
    const send = document.getElementById("vcChatbotSend");

    const messages = document.getElementById("vcChatbotMessages");
    const typing = document.getElementById("vcChatbotTyping");

    if (!chatbot || !toggle) {
        return;
    }

    /* =========================
       OPEN / CLOSE
    ========================= */

    toggle.addEventListener("click", function () {

        chatbot.classList.toggle("open");

        const icon = toggle.querySelector(".vc-chatbot-icon");
        const close = toggle.querySelector(".vc-chatbot-close");

        if (chatbot.classList.contains("open")) {
            icon.style.display = "none";
            close.style.display = "block";
            input.focus();
        } else {
            icon.style.display = "block";
            close.style.display = "none";
        }
    });

    minimize.addEventListener("click", function () {
        chatbot.classList.remove("open");

        toggle.querySelector(".vc-chatbot-icon").style.display = "block";
        toggle.querySelector(".vc-chatbot-close").style.display = "none";
    });

    /* =========================
       SEND MESSAGE
    ========================= */

    function sendMessage(text) {

        text = text.trim();

        if (!text) {
            return;
        }

        addMessage(text, "user");

        input.value = "";

        showTyping();

        setTimeout(function () {

            hideTyping();

            const reply = getBotReply(text);

            addMessage(reply, "bot");

        }, 700);
    }

    /* =========================
       ADD MESSAGE
    ========================= */

    function addMessage(text, type) {

        const wrapper = document.createElement("div");

        wrapper.className =
            type === "user"
                ? "vc-chat-message vc-user-message"
                : "vc-chat-message vc-bot-message";

        const avatar =
            type === "bot"
                ? `<div class="vc-message-avatar">🎓</div>`
                : "";

        wrapper.innerHTML = `
            ${avatar}

            <div class="vc-message-content">

                <div class="vc-message-bubble">
                    ${text}
                </div>

                <span class="vc-message-time">
                    Just now
                </span>

            </div>
        `;

        messages.appendChild(wrapper);

        messages.scrollTop = messages.scrollHeight;
    }

    /* =========================
       TYPING
    ========================= */

    function showTyping() {
        typing.style.display = "block";
        messages.scrollTop = messages.scrollHeight;
    }

    function hideTyping() {
        typing.style.display = "none";
    }

    /* =========================
       BOT RESPONSES
    ========================= */

    function getBotReply(message) {

        const text = message.toLowerCase();

        if (
            text.includes("program") ||
            text.includes("course")
        ) {
            return `
                We offer a range of undergraduate and postgraduate
                programs including <strong>BCA, BBA, MCA, MBA</strong>
                and more.<br><br>
                You can explore programs based on your interests,
                career goals and preferred university.
            `;
        }

        if (text.includes("bca")) {
            return `
                <strong>BCA – Bachelor of Computer Applications</strong><br><br>
                A great option for students interested in programming,
                software development, databases, web technologies and
                emerging technologies.
            `;
        }

        if (text.includes("bba")) {
            return `
                <strong>BBA – Bachelor of Business Administration</strong><br><br>
                BBA focuses on business, management, marketing,
                finance, entrepreneurship and leadership skills.
            `;
        }

        if (text.includes("mca")) {
            return `
                <strong>MCA – Master of Computer Applications</strong><br><br>
                MCA is designed for students who want to build advanced
                knowledge in software development, applications and
                computer technologies.
            `;
        }

        if (text.includes("mba")) {
            return `
                <strong>MBA – Master of Business Administration</strong><br><br>
                MBA develops business, management, leadership and
                strategic decision-making skills.
            `;
        }

        if (
            text.includes("admission") ||
            text.includes("eligibility") ||
            text.includes("requirement")
        ) {
            return `
                Admission requirements depend on the program and
                university.<br><br>
                Tell me the <strong>program you're interested in</strong>
                and I can guide you through the typical eligibility
                and admission process.
            `;
        }

        if (
            text.includes("fee") ||
            text.includes("fees") ||
            text.includes("cost")
        ) {
            return `
                Fees vary depending on the program and university.
                💰<br><br>
                Tell me which <strong>program</strong> you're interested
                in, and we can help you explore the available options.
            `;
        }

        if (
            text.includes("university") ||
            text.includes("college")
        ) {
            return `
                You can explore universities based on your program,
                location, course options and other preferences. 🏫<br><br>
                Tell me which program you're looking for.
            `;
        }

        if (
            text.includes("scholarship") ||
            text.includes("scholarships")
        ) {
            return `
                Scholarship availability depends on the university,
                program and eligibility criteria. 🎓<br><br>
                You can check the specific university's scholarship
                options before applying.
            `;
        }

        if (
            text.includes("counselling") ||
            text.includes("counseling") ||
            text.includes("counsellor") ||
            text.includes("counselor")
        ) {
            return `
                Absolutely! 👩‍🏫<br><br>
                Our counselling team can help you understand programs,
                universities and possible education pathways.
                <br><br>
                <strong>Click "Get Free Counselling"</strong> on the
                page to continue.
            `;
        }

        if (
            text.includes("hello") ||
            text.includes("hi") ||
            text.includes("hey")
        ) {
            return `
                Hello! 👋<br><br>
                I'm your VCampus Assistant. What would you like to
                explore today?
                <br><br>
                🎓 Programs<br>
                🏫 Universities<br>
                📝 Admissions<br>
                💰 Fees<br>
                👩‍🏫 Counselling
            `;
        }

        return `
            I'd be happy to help! 😊<br><br>
            You can ask me about:
            <br><br>
            🎓 <strong>Programs</strong><br>
            🏫 <strong>Universities</strong><br>
            📝 <strong>Admissions & Eligibility</strong><br>
            💰 <strong>Fees</strong><br>
            🎓 <strong>Scholarships</strong><br>
            👩‍🏫 <strong>Counselling</strong>
        `;
    }

    /* =========================
       SEND BUTTON
    ========================= */

    send.addEventListener("click", function () {
        sendMessage(input.value);
    });

    /* =========================
       ENTER KEY
    ========================= */

    input.addEventListener("keydown", function (event) {

        if (event.key === "Enter") {
            event.preventDefault();
            sendMessage(input.value);
        }

    });

    /* =========================
       QUICK QUESTIONS
    ========================= */

    document.querySelectorAll(
        ".vc-chatbot-quick-options button"
    ).forEach(function (button) {

        button.addEventListener("click", function () {

            const question =
                button.getAttribute("data-question");

            sendMessage(question);

        });

    });

});