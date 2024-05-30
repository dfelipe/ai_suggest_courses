# ai_suggest_courses
AI models to generate course suggestions in a Learning Management System
The project structure is as follows:

Folders:

res: Contains the files with the Dataframes resulting from the different data analysis and selection processes.

models: Contains the different trained models.

Pluging: Contains the Block-type plug-in structure for Moodle and the Python component that consumes the trained model.

Files:

Data analysis.ipynb: Analysis of each of the files in the Data set.

Seleccion_atributos.ipynb: Tests and activities to select the attributes of the data set to train the different models.

Unsupervised_algorithms.ipynb: Testing and training with the KMeans algorithm and Dendrogram.

Algoritmos_supervisados.ipynb: Testing and training with the Linear Regression algorithm, Support Vector Machine and Decision Tree.

Red_neuronal.ipynb: Testing and training of the Neural Networks algorithm.
