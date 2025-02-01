@extends('dashboard')
@section('content')

<style>
    /* Modern Styling */
    .dashboard-main {
        padding: 20px;
        width: 100%; /* Ensure it spans the full width */
        margin: 0 auto;
    }

    .timeline-item {
        display: flex;
        align-items: flex-start;
        margin-bottom: 20px;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        width: 100%; /* Ensure it spans the full width */
    }

    .timeline-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }

    .icon {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-right: 20px;
        background-color: #007bff;
        color: #fff;
        font-size: 18px;
    }

    .icon.completed {
        background-color: #28a745;
    }

    .icon.in-progress {
        background-color: #ffc107;
    }

    .icon.pending {
        background-color: #dc3545;
    }

    .content {
        flex: 1;
        width: 100%; /* Ensure it spans the full width */
    }

    .content h3 {
        margin: 0 0 10px;
        font-size: 20px;
        color: #333;
    }

    .status {
        display: inline-block;
        padding: 5px 10px;
        border-radius: 4px;
        font-size: 14px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .status.completed {
        background-color: #28a745;
        color: #fff;
    }

    .status.in-progress {
        background-color: #ffc107;
        color: #000;
    }

    .status.pending {
        background-color: #dc3545;
        color: #fff;
    }

    .feedback-list,
    .remarks-list {
        margin-top: 10px;
        width: 100%; /* Ensure it spans the full width */
    }

    .feedback-item,
    .remark-item {
        padding: 10px;
        margin-bottom: 10px;
        background-color: #f8f9fa;
        border-radius: 4px;
        border-left: 4px solid #007bff;
        width: 100%; /* Ensure it spans the full width */
    }

    .feedback-item p,
    .remark-item p {
        margin: 0;
        font-size: 14px;
        color: #555;
    }

    .feedback-item small,
    .remark-item small {
        display: block;
        margin-top: 5px;
        font-size: 12px;
        color: #888;
    }

    .reply-form {
        margin-top: 10px;
    }

    .reply-form textarea {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        resize: vertical;
    }

    .reply-form button {
        margin-top: 5px;
        padding: 6px 12px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .reply-form button:hover {
        background-color: #0056b3;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .timeline-item {
            flex-direction: column;
            align-items: flex-start;
        }

        .icon {
            margin-bottom: 10px;
        }

        .content h3 {
            font-size: 18px;
        }

        .status {
            font-size: 12px;
        }

        .feedback-item,
        .remark-item {
            padding: 8px;
        }

        .feedback-item p,
        .remark-item p {
            font-size: 12px;
        }

        .feedback-item small,
        .remark-item small {
            font-size: 10px;
        }
    }
</style>

<main class="dashboard-main">
    @foreach ($stages as $stage)
        <div class="timeline-item">
            <div class="icon {{ $stage->status }}">
                <!-- Add icon here -->
                <i class="fas fa-tasks"></i>
            </div>
            <div class="content">
                <h3>{{ $stage->name }}</h3>
                <div class="status {{ $stage->status }}">{{ ucfirst($stage->status) }}</div>

                <!-- Feedback List -->
                <div class="feedback-list" id="feedback-{{ $stage->id }}">
                    @foreach ($stage->feedback as $feedback)
                        <div class="feedback-item">
                            <p>{{ $feedback->comment }}</p>
                            <small>{{ $feedback->created_at->format('Y-m-d H:i:s') }}</small>

                            <!-- Reply Form for Feedback -->
                            <form class="reply-form" action="{{ route('reply.feedback', $feedback->id) }}" method="POST">
                                @csrf
                                <textarea name="reply" placeholder="Reply to this feedback..." required></textarea>
                                <button type="submit">Reply</button>
                            </form>
                        </div>
                    @endforeach
                </div>

                <!-- Remarks List -->
                <div class="remarks-list" id="remarks-{{ $stage->id }}">
                    @foreach ($stage->remarks as $remark)
                        <div class="remark-item">
                            <p>{{ $remark->comment }}</p>
                            <small>{{ $remark->created_at->format('Y-m-d H:i:s') }}</small>

                            <!-- Reply Form for Remark -->
                            <form class="reply-form" action="{{ route('reply.remark', $remark->id) }}" method="POST">
                                @csrf
                                <textarea name="reply" placeholder="Reply to this remark..." required></textarea>
                                <button type="submit">Reply</button>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endforeach
</main>

@endsection