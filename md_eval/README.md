# Medical Image Evaluation Tool: User Guide

## Welcome to the Medical Image Evaluation Study!

Thank you for contributing your expertise to this important study. This guide will walk you through how to use our web-based tool to evaluate pairs of medical images. Your feedback is crucial for advancing medical imaging research.

**Current Date:** Tuesday, May 6, 2025

## 1. Getting Started

* **Accessing the Tool:** To begin, simply open the `index.html` file in a modern web browser (such as Chrome, Firefox, or Edge).
* **Welcome Screen:** You'll see a welcome page that provides an overview of the study. It outlines the two main tasks you'll be performing:
    * **Image Quality Assessment**
    * **Image-Caption Alignment**
* **Starting the Evaluation:** Click the "**Start Evaluation**" button to begin with the first pair of images.

<!-- ![Screenshot of index.html - Welcome Screen](https://via.placeholder.com/600x400.png?text=Placeholder:Welcome+Screen+Screenshot)
*(Imagine a screenshot of your index.html page here)* -->

## 2. The Evaluation Process

For each pair of medical images, you will perform two tasks:

### Task A: Image Quality Assessment

1.  **Viewing Images:** You will be shown two medical images (Image 1 and Image 2) side-by-side.
2.  **Assessment Criteria:** Above the images, you'll find a section titled "**Please consider the following key quality attributes...**". Please refer to these criteria (Artifacts, Blur, Noise, Contrast/Illumination, ROI Visibility) when making your decision.
3.  **Enlarging Images:** To get a closer look, simply click on either image. An enlarged version will appear in a pop-up window. Click the '×' button or press the 'Escape' key on your keyboard to close the enlarged view.
4.  **Making Your Selection:** Below the images, choose the option that best reflects your assessment:
    * `a. Image 1` (if Image 1 is of higher quality)
    * `b. Image 2` (if Image 2 is of higher quality)
    * `c. Equal Quality`
    * `d. Cannot Judge`
5.  **Proceeding:** After making your selection, click the "**Next ➡️**" button. This will take you to Task B (Image-Caption Alignment) for the *same* pair of images.

<!-- ![Screenshot of quality.html - Quality Assessment](https://via.placeholder.com/600x400.png?text=Placeholder:Quality+Assessment+Screen)
*(Imagine a screenshot of your quality.html page here, highlighting criteria and selection options)* -->

### Task B: Image-Caption Alignment

1.  **Viewing Images and Captions:** You'll see the same two images again, but this time, each image will have a descriptive text (caption) displayed beneath it.
2.  **Assessment:** Read the caption for each image and decide which image is more accurately and relevantly described by its caption.
3.  **Enlarging Images:** As before, you can click on either image to view an enlarged version.
4.  **Making Your Selection:** Choose the option that best reflects your assessment:
    * `a. Image 1` (if Image 1 and its caption are better aligned)
    * `b. Image 2` (if Image 2 and its caption are better aligned)
    * `c. Equally Aligned`
    * `d. Cannot Judge`
5.  **Proceeding to Next Pair:** After making your selection, click the "**Next ➡️**" button. This will save your choices for the current pair and then load the next pair of images, starting again with Task A (Image Quality Assessment).

<!-- ![Screenshot of alignment.html - Alignment Assessment](https://via.placeholder.com/600x400.png?text=Placeholder:Alignment+Assessment+Screen)
*(Imagine a screenshot of your alignment.html page here, highlighting captions and selection options)* -->

## 3. Navigating the Tool

* **Progress Display:** At the top of the evaluation pages (`quality.html` and `alignment.html`), you'll see your current progress, like "**Pair X of Y**", indicating which pair you are currently evaluating out of the total number of pairs.
* **Next Button (➡️):**
    * On the *Quality Assessment* page, it takes you to the *Alignment Assessment* for the current image pair.
    * On the *Alignment Assessment* page, it takes you to the *Quality Assessment* for the next image pair.
* **Previous Button (⬅️):**
    * On the *Alignment Assessment* page (`alignment.html`), clicking "Previous" will take you back to the *Quality Assessment* page (`quality.html`) for the **current** image pair, allowing you to change your quality rating if needed.
    * On the *Quality Assessment* page (`quality.html`), clicking "Previous" will take you to the *Alignment Assessment* page (`alignment.html`) for the **previous** image pair. If you are on the very first pair, it will take you back to the main welcome page (`index.html`).
* **Return to Index Button (🏠):**
    * This button is available on both evaluation pages. Clicking it will take you back to the main welcome screen (`index.html`). Your progress will still be saved.

## 4. Managing Your Responses

* **Automatic Saving:** Your selections are automatically saved in your web browser's local storage as you make them. This means you can close the browser and resume the evaluation later from where you left off (as long as you use the same browser on the same computer).
* **Resuming Evaluation:** Simply open the `index.html` file again. When you click "Start Evaluation," the tool should take you to the first pair you haven't completed or the task (quality/alignment) you were last on.
* **Downloading Your Responses (⬇️ Download Responses):**
    * At the bottom of both the *Quality Assessment* and *Alignment Assessment* pages, you'll find a green button with a download icon.
    * Click this button at any time to download a file (e.g., `image_evaluation_responses_YYYY-MM-DD.json`) containing all your responses made so far.
    * We recommend downloading your responses periodically, especially after completing a large number of evaluations or at the end of your session. The button will briefly change to "✅ Downloaded!" to confirm.
* **Resetting All Your Choices (🔄 Reset All Choices):**
    * If you need to clear all your previously saved responses and start the entire evaluation from the very beginning, click the red "Reset All Choices" button (with a refresh icon) found at the bottom of the evaluation pages.
    * **Caution:** A confirmation message will appear ("Are you sure you want to reset all your choices? This cannot be undone."). This action permanently deletes your saved progress from the browser.

## 5. Important Notes for Evaluators

* **Objective Assessment:** Please base your judgments on your medical expertise and the provided criteria.
* **Take Your Time:** There is no time limit for evaluating each pair. Careful consideration is appreciated.
* **Image Loading:** If images appear to be missing or don't load correctly, please ensure you have a stable internet connection (if the images are hosted online) or that the image files are correctly located if you are running this tool locally with a provided image set. If issues persist, please contact the study coordinator.

Thank you for your valuable contribution to this research!