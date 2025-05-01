<?php
/**
 * Projects section
 * 
 * @author John Doe
 */
?>
<section id="projects" class="projects section">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Featured Projects</h2>
        
        <div class="projects-grid grid grid-3" data-aos="fade-up" data-aos-delay="200">
            <!-- Project 1 -->
            <div class="project-card" data-modal="project-modal-1">
                <div class="project-image">
                    <i class="fas fa-brain"></i>
                    <span class="project-category">Machine Learning</span>
                </div>
                <div class="project-content">
                    <h3 class="project-title">Real-time Emotion Recognition</h3>
                    <p class="project-description">
                        A real-time facial emotion recognition system using deep learning that can detect 7 different emotions through webcam input.
                    </p>
                    <div class="project-tech">
                        <span>Python</span>
                        <span>TensorFlow</span>
                        <span>OpenCV</span>
                        <span>CNN</span>
                    </div>
                    <div class="project-links">
                        <a href="https://github.com/" target="_blank">
                            <i class="fab fa-github"></i> View Code
                        </a>
                        <a href="#" class="project-demo-link">
                            <i class="fas fa-external-link-alt"></i> Live Demo
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Project 2 -->
            <div class="project-card" data-modal="project-modal-2">
                <div class="project-image">
                    <i class="fas fa-chart-line"></i>
                    <span class="project-category">Data Analysis</span>
                </div>
                <div class="project-content">
                    <h3 class="project-title">COVID-19 Data Analysis</h3>
                    <p class="project-description">
                        Comprehensive analysis of COVID-19 data to identify trends, predict future cases, and visualize impact across different regions.
                    </p>
                    <div class="project-tech">
                        <span>Python</span>
                        <span>Pandas</span>
                        <span>Plotly</span>
                        <span>Scikit-learn</span>
                    </div>
                    <div class="project-links">
                        <a href="https://github.com/" target="_blank">
                            <i class="fab fa-github"></i> View Code
                        </a>
                        <a href="#" class="project-demo-link">
                            <i class="fas fa-external-link-alt"></i> Report
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Project 3 -->
            <div class="project-card" data-modal="project-modal-3">
                <div class="project-image">
                    <i class="fas fa-robot"></i>
                    <span class="project-category">NLP</span>
                </div>
                <div class="project-content">
                    <h3 class="project-title">Intelligent Chatbot</h3>
                    <p class="project-description">
                        An AI-powered chatbot that understands natural language queries and provides context-aware responses for customer support.
                    </p>
                    <div class="project-tech">
                        <span>Python</span>
                        <span>NLTK</span>
                        <span>spaCy</span>
                        <span>Flask</span>
                    </div>
                    <div class="project-links">
                        <a href="https://github.com/" target="_blank">
                            <i class="fab fa-github"></i> View Code
                        </a>
                        <a href="#" class="project-demo-link">
                            <i class="fas fa-external-link-alt"></i> Live Demo
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Project 4 -->
            <div class="project-card" data-modal="project-modal-4">
                <div class="project-image">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="project-category">Recommendation</span>
                </div>
                <div class="project-content">
                    <h3 class="project-title">Product Recommendation Engine</h3>
                    <p class="project-description">
                        A recommendation system for e-commerce platforms that suggests products based on user behavior and preferences.
                    </p>
                    <div class="project-tech">
                        <span>Python</span>
                        <span>Surprise</span>
                        <span>PySpark</span>
                        <span>AWS</span>
                    </div>
                    <div class="project-links">
                        <a href="https://github.com/" target="_blank">
                            <i class="fab fa-github"></i> View Code
                        </a>
                        <a href="#" class="project-demo-link">
                            <i class="fas fa-file-pdf"></i> Paper
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Project 5 -->
            <div class="project-card" data-modal="project-modal-5">
                <div class="project-image">
                    <i class="fas fa-language"></i>
                    <span class="project-category">NLP</span>
                </div>
                <div class="project-content">
                    <h3 class="project-title">Multilingual Text Summarizer</h3>
                    <p class="project-description">
                        An application that automatically generates concise summaries from long articles in multiple languages.
                    </p>
                    <div class="project-tech">
                        <span>Python</span>
                        <span>Transformers</span>
                        <span>PyTorch</span>
                        <span>Streamlit</span>
                    </div>
                    <div class="project-links">
                        <a href="https://github.com/" target="_blank">
                            <i class="fab fa-github"></i> View Code
                        </a>
                        <a href="#" class="project-demo-link">
                            <i class="fas fa-external-link-alt"></i> Live Demo
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Project 6 -->
            <div class="project-card" data-modal="project-modal-6">
                <div class="project-image">
                    <i class="fas fa-chart-bar"></i>
                    <span class="project-category">Data Visualization</span>
                </div>
                <div class="project-content">
                    <h3 class="project-title">Interactive Stock Market Dashboard</h3>
                    <p class="project-description">
                        A real-time dashboard for tracking stock market performance with predictive analytics and customizable views.
                    </p>
                    <div class="project-tech">
                        <span>Python</span>
                        <span>Dash</span>
                        <span>Plotly</span>
                        <span>yfinance</span>
                    </div>
                    <div class="project-links">
                        <a href="https://github.com/" target="_blank">
                            <i class="fab fa-github"></i> View Code
                        </a>
                        <a href="#" class="project-demo-link">
                            <i class="fas fa-external-link-alt"></i> Live Demo
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Project Modals -->
    <!-- Modal 1 -->
    <div id="project-modal-1" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">Real-time Emotion Recognition</h2>
                <button class="modal-close">&times;</button>
            </div>
            <div class="modal-body">
                <div class="modal-image">
                    <i class="fas fa-brain"></i>
                </div>
                <div class="modal-details">
                    <h3 class="modal-subtitle">Project Overview</h3>
                    <p class="modal-description">
                        This project implements a real-time facial emotion recognition system that can detect and classify seven different human emotions (happy, sad, angry, surprised, disgusted, fearful, and neutral) through webcam input. The system uses a convolutional neural network (CNN) trained on the FER2013 dataset to achieve high accuracy in various lighting conditions and facial orientations.
                    </p>
                    
                    <h3 class="modal-subtitle">Technology Stack</h3>
                    <div class="modal-tech-stack">
                        <span>Python</span>
                        <span>TensorFlow</span>
                        <span>Keras</span>
                        <span>OpenCV</span>
                        <span>NumPy</span>
                        <span>CNN</span>
                        <span>Flask</span>
                    </div>
                    
                    <h3 class="modal-subtitle">Key Features</h3>
                    <div class="modal-features">
                        <ul>
                            <li>Real-time emotion detection through webcam feed</li>
                            <li>High accuracy (87%) across diverse users and lighting conditions</li>
                            <li>Efficient model with low latency for smooth real-time processing</li>
                            <li>Visualization of emotion probabilities</li>
                            <li>API endpoint for integration with other applications</li>
                            <li>Detailed analytics of detected emotions over time</li>
                        </ul>
                    </div>
                    
                    <h3 class="modal-subtitle">Implementation Details</h3>
                    <p class="modal-description">
                        The emotion recognition pipeline consists of four main steps: face detection using Haar cascades, pre-processing of facial images, emotion classification using a CNN model, and visualization of results. The CNN architecture includes five convolutional layers followed by max-pooling layers, and three fully connected layers with dropout for regularization.
                    </p>
                    <p class="modal-description">
                        The model was trained on the FER2013 dataset with data augmentation techniques to improve generalization. Transfer learning was applied by leveraging a pre-trained VGG-Face model and fine-tuning it on our specific task, which significantly improved performance.
                    </p>
                    
                    <div class="modal-buttons">
                        <a href="https://github.com/" target="_blank" class="btn btn-primary">View Repository</a>
                        <a href="#" class="btn btn-outline">Live Demo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Modal 2 -->
    <div id="project-modal-2" class="modal">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title">COVID-19 Data Analysis</h2>
                <button class="modal-close">&times;</button>
            </div>
            <div class="modal-body">
                <div class="modal-image">
                    <i class="fas fa-chart-line"></i>
                </div>
                <div class="modal-details">
                    <h3 class="modal-subtitle">Project Overview</h3>
                    <p class="modal-description">
                        This comprehensive data analysis project examines COVID-19 data from multiple sources to identify trends, predict future cases, and visualize the pandemic's impact across different regions. The analysis provides insights into infection rates, vaccination effectiveness, and the relationship between various socioeconomic factors and COVID-19 outcomes.
                    </p>
                    
                    <h3 class="modal-subtitle">Technology Stack</h3>
                    <div class="modal-tech-stack">
                        <span>Python</span>
                        <span>Pandas</span>
                        <span>NumPy</span>
                        <span>Plotly</span>
                        <span>Scikit-learn</span>
                        <span>Statsmodels</span>
                        <span>Jupyter Notebook</span>
                    </div>
                    
                    <h3 class="modal-subtitle">Key Features</h3>
                    <div class="modal-features">
                        <ul>
                            <li>Time-series analysis of global COVID-19 cases and deaths</li>
                            <li>Interactive choropleth maps showing spread patterns</li>
                            <li>Predictive modeling for case forecasting using ARIMA and Prophet</li>
                            <li>Correlation analysis between health infrastructure and mortality rates</li>
                            <li>Vaccination rate impact assessment</li>
                            <li>Comparative analysis of policy effectiveness across countries</li>
                        </ul>
                    </div>
                    
                    <h3 class="modal-subtitle">Data Sources</h3>
                    <p class="modal-description">
                        The project integrates data from multiple sources including the Johns Hopkins University COVID-19 repository, Our World in Data, the World Health Organization, and various governmental health agencies. All data was carefully cleaned, normalized, and validated before analysis.
                    </p>
                    
                    <h3 class="modal-subtitle">Key Findings</h3>
                    <p class="modal-description">
                        The analysis revealed significant correlations between early intervention policies and reduced infection rates. Countries with robust healthcare infrastructure showed lower mortality rates despite similar infection levels. Vaccination campaigns demonstrated a clear impact on reducing both hospitalization rates and severe outcomes.
                    </p>
                    
                    <div class="modal-buttons">
                        <a href="https://github.com/" target="_blank" class="btn btn-primary">View Repository</a>
                        <a href="#" class="btn btn-outline">View Report</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Additional modals would be added similarly for other projects -->
</section>
