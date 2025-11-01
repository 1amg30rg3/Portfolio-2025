<script setup>
import Navigation from '@/Components/Navigation.vue';
import { ref } from 'vue';

const messages = ref([
    {
        id: 1,
        name: 'John Smith',
        email: 'john.smith@example.com',
        subject: 'Website Development Project',
        message: 'Hi! I am interested in hiring you for a website development project. Could we discuss the details?',
        date: '2024-01-15',
        time: '10:30 AM',
        read: false
    },
    {
        id: 2,
        name: 'Sarah Johnson',
        email: 'sarah.j@company.com',
        subject: 'Collaboration Opportunity',
        message: 'I came across your portfolio and I am impressed with your work. Would you be interested in collaborating on a project?',
        date: '2024-01-14',
        time: '2:45 PM',
        read: true
    },
    {
        id: 3,
        name: 'Michael Brown',
        email: 'mbrown@tech.com',
        subject: 'Job Opportunity',
        message: 'We have an exciting full-stack developer position available at our company. Your skills match perfectly!',
        date: '2024-01-13',
        time: '9:15 AM',
        read: true
    },
    {
        id: 4,
        name: 'Emily Davis',
        email: 'emily.davis@startup.io',
        subject: 'Question about your project',
        message: 'I saw your CRM project and I have some questions about the technology stack you used. Can you share more details?',
        date: '2024-01-12',
        time: '4:20 PM',
        read: true
    }
]);

const selectedMessage = ref(null);

const selectMessage = (message) => {
    selectedMessage.value = message;
    message.read = true;
};

const deleteMessage = (id) => {
    messages.value = messages.value.filter(msg => msg.id !== id);
    if (selectedMessage.value?.id === id) {
        selectedMessage.value = null;
    }
};

const unreadCount = ref(messages.value.filter(msg => !msg.read).length);
</script>

<style lang="scss" scoped>
@use "../../scss/variables.scss" as *;

.messages-page {
    min-height: 100vh;
    padding: 120px 20px 80px;
    background-color: $primary-color;

    .container {
        max-width: 1400px;
        margin: 0 auto;
    }

    .page-header {
        text-align: center;
        margin-bottom: 60px;
        animation: fadeInUp 0.8s ease forwards;

        .title {
            font-size: 68px;
            font-weight: 900;
            margin-bottom: 20px;
            text-shadow: 0 4px 20px rgba(0, 153, 255, 0.3);

            span {
                color: $secondary-color;
                font-size: 100px;
                font-family: "Dancing Script", cursive;
                filter: drop-shadow(0 0 10px rgba(0, 153, 255, 0.5));
            }
        }

        .subtitle {
            font-size: 24px;
            color: rgba(255, 255, 255, 0.8);
            margin-top: 10px;

            .badge {
                display: inline-block;
                background: $secondary-color;
                color: $primary-color;
                padding: 5px 15px;
                border-radius: 20px;
                font-size: 16px;
                font-weight: 700;
                margin-left: 10px;
            }
        }
    }

    .messages-container {
        display: grid;
        grid-template-columns: 400px 1fr;
        gap: 30px;
        min-height: 600px;

        @media (max-width: 1024px) {
            grid-template-columns: 1fr;
        }
    }

    .messages-list {
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.05) 0%, rgba(255, 255, 255, 0.02) 100%);
        border: 1px solid rgba(0, 102, 170, 0.3);
        border-radius: 20px;
        padding: 20px;
        backdrop-filter: blur(10px);
        animation: fadeInUp 1s ease forwards;
        overflow-y: auto;
        max-height: 700px;

        h2 {
            font-size: 24px;
            font-weight: 800;
            margin-bottom: 20px;
            color: $text-color;
            padding-bottom: 15px;
            border-bottom: 1px solid rgba(0, 153, 255, 0.2);
        }

        .message-item {
            padding: 20px;
            margin-bottom: 15px;
            background: rgba(255, 255, 255, 0.02);
            border: 1px solid rgba(0, 102, 170, 0.2);
            border-radius: 12px;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;

            &.unread {
                background: rgba(0, 153, 255, 0.05);
                border-color: rgba(0, 153, 255, 0.4);

                &::before {
                    content: '';
                    position: absolute;
                    left: 0;
                    top: 0;
                    bottom: 0;
                    width: 4px;
                    background: $secondary-color;
                    border-radius: 12px 0 0 12px;
                }
            }

            &.active {
                background: rgba(0, 153, 255, 0.15);
                border-color: $secondary-color;
            }

            &:hover {
                transform: translateX(5px);
                border-color: $secondary-color;
                box-shadow: 0 5px 20px rgba(0, 153, 255, 0.2);
            }

            .message-header {
                display: flex;
                justify-content: space-between;
                align-items: flex-start;
                margin-bottom: 8px;

                .sender-name {
                    font-size: 16px;
                    font-weight: 700;
                    color: $text-color;
                }

                .message-time {
                    font-size: 12px;
                    color: rgba(255, 255, 255, 0.5);
                }
            }

            .message-subject {
                font-size: 14px;
                font-weight: 600;
                color: $secondary-color;
                margin-bottom: 5px;
            }

            .message-preview {
                font-size: 13px;
                color: rgba(255, 255, 255, 0.6);
                overflow: hidden;
                text-overflow: ellipsis;
                white-space: nowrap;
            }
        }
    }

    .message-detail {
        background: linear-gradient(135deg, rgba(255, 255, 255, 0.05) 0%, rgba(255, 255, 255, 0.02) 100%);
        border: 1px solid rgba(0, 102, 170, 0.3);
        border-radius: 20px;
        padding: 40px;
        backdrop-filter: blur(10px);
        animation: fadeInUp 1.2s ease forwards;

        .empty-state {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100%;
            min-height: 400px;
            color: rgba(255, 255, 255, 0.4);

            i {
                font-size: 80px;
                margin-bottom: 20px;
                color: rgba(0, 153, 255, 0.3);
            }

            p {
                font-size: 18px;
            }
        }

        .detail-header {
            padding-bottom: 25px;
            border-bottom: 1px solid rgba(0, 153, 255, 0.2);
            margin-bottom: 30px;

            .sender-info {
                display: flex;
                justify-content: space-between;
                align-items: flex-start;
                margin-bottom: 15px;

                .sender-details {
                    h2 {
                        font-size: 28px;
                        font-weight: 800;
                        color: $text-color;
                        margin-bottom: 5px;
                    }

                    .email {
                        font-size: 16px;
                        color: $secondary-color;
                    }
                }

                .actions {
                    display: flex;
                    gap: 10px;

                    button {
                        padding: 10px 20px;
                        background: rgba(0, 153, 255, 0.1);
                        border: 1px solid rgba(0, 153, 255, 0.3);
                        border-radius: 8px;
                        color: $text-color;
                        cursor: pointer;
                        transition: all 0.3s ease;

                        &:hover {
                            background: $secondary-color;
                            color: $primary-color;
                        }

                        &.delete {
                            background: rgba(255, 0, 0, 0.1);
                            border-color: rgba(255, 0, 0, 0.3);

                            &:hover {
                                background: #ff0000;
                            }
                        }
                    }
                }
            }

            .subject {
                font-size: 20px;
                font-weight: 600;
                color: $text-color;
                margin-bottom: 10px;
            }

            .date-time {
                font-size: 14px;
                color: rgba(255, 255, 255, 0.5);
            }
        }

        .detail-body {
            .message-content {
                font-size: 16px;
                line-height: 1.8;
                color: rgba(255, 255, 255, 0.9);
                white-space: pre-wrap;
            }
        }
    }
}

@keyframes fadeInUp {
    0% {
        opacity: 0;
        transform: translateY(30px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>

<template>
    <Navigation />
    <div class="messages-page">
        <div class="container">
            <div class="page-header">
                <h1 class="title">MESS<span>A</span>GES</h1>
                <p class="subtitle">
                    Your inbox
                    <span class="badge" v-if="unreadCount > 0">{{ unreadCount }} New</span>
                </p>
            </div>

            <div class="messages-container">
                <div class="messages-list">
                    <h2>All Messages</h2>
                    <div
                        v-for="message in messages"
                        :key="message.id"
                        :class="['message-item', { unread: !message.read, active: selectedMessage?.id === message.id }]"
                        @click="selectMessage(message)"
                    >
                        <div class="message-header">
                            <span class="sender-name">{{ message.name }}</span>
                            <span class="message-time">{{ message.time }}</span>
                        </div>
                        <div class="message-subject">{{ message.subject }}</div>
                        <div class="message-preview">{{ message.message }}</div>
                    </div>
                </div>

                <div class="message-detail">
                    <div v-if="!selectedMessage" class="empty-state">
                        <i class="fa-solid fa-envelope-open"></i>
                        <p>Select a message to read</p>
                    </div>

                    <div v-else>
                        <div class="detail-header">
                            <div class="sender-info">
                                <div class="sender-details">
                                    <h2>{{ selectedMessage.name }}</h2>
                                    <div class="email">{{ selectedMessage.email }}</div>
                                </div>
                                <div class="actions">
                                    <button><i class="fa-solid fa-reply"></i> Reply</button>
                                    <button class="delete" @click="deleteMessage(selectedMessage.id)">
                                        <i class="fa-solid fa-trash"></i> Delete
                                    </button>
                                </div>
                            </div>
                            <div class="subject">{{ selectedMessage.subject }}</div>
                            <div class="date-time">{{ selectedMessage.date }} at {{ selectedMessage.time }}</div>
                        </div>

                        <div class="detail-body">
                            <div class="message-content">{{ selectedMessage.message }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

