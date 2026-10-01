<!-- ==============================
     VCAMPUS AI CHATBOT
================================= -->

<div class="vc-chatbot">

    <!-- Floating Button -->
    <button class="vc-chatbot-toggle" id="vcChatbotToggle" type="button">
        <span class="vc-chatbot-icon">💬</span>
        <span class="vc-chatbot-close">×</span>
    </button>

    <!-- Chat Window -->
    <div class="vc-chatbot-window" id="vcChatbotWindow">

        <!-- Header -->
        <div class="vc-chatbot-header">
            <div class="vc-chatbot-header-info">
                <div class="vc-chatbot-avatar">🎓</div>

                <div>
                    <h3>VCampus Assistant</h3>
                    <span>
                        <i></i> Online • Here to help
                    </span>
                </div>
            </div>

            <button
                type="button"
                class="vc-chatbot-minimize"
                id="vcChatbotMinimize"
            >
                −
            </button>
        </div>

        <!-- Messages -->
        <div class="vc-chatbot-messages" id="vcChatbotMessages">

            <div class="vc-chat-message vc-bot-message">
                <div class="vc-message-avatar">🎓</div>

                <div class="vc-message-content">
                    <div class="vc-message-bubble">
                        Hi! 👋 I'm your VCampus Assistant.
                        <br><br>
                        I can help you explore <strong>programs, universities,
                        admissions, eligibility, fees</strong> and more.
                        <br><br>
                        What are you looking for?
                    </div>

                    <span class="vc-message-time">Just now</span>
                </div>
            </div>

            <!-- Quick Questions -->
            <div class="vc-chatbot-quick-options">

                <button type="button" data-question="What programs do you offer?">
                    🎓 Programs
                </button>

                <button type="button" data-question="Tell me about BCA">
                    💻 BCA
                </button>

                <button type="button" data-question="Tell me about BBA">
                    📊 BBA
                </button>

                <button type="button" data-question="Tell me about MCA">
                    🧑‍💻 MCA
                </button>

                <button type="button" data-question="What are the admission requirements?">
                    📝 Admissions
                </button>

                <button type="button" data-question="I want counselling">
                    👩‍🏫 Counselling
                </button>

            </div>

        </div>

        <!-- Typing Indicator -->
        <div class="vc-chatbot-typing" id="vcChatbotTyping">

            <span></span>
            <span></span>
            <span></span>

        </div>

        <!-- Input -->
        <div class="vc-chatbot-input-area">

            <input
                type="text"
                id="vcChatbotInput"
                placeholder="Ask about programs, admissions..."
                autocomplete="off"
            >

            <button
                type="button"
                id="vcChatbotSend"
                aria-label="Send message"
            >
                ➤
            </button>

        </div>

        <!-- Footer -->
        <div class="vc-chatbot-footer">
            Powered by <strong>VCampus</strong>
        </div>

    </div>

</div>