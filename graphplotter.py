import matplotlib.pyplot as plt
import numpy as np
import seaborn as sns
import pandas as pd
import csv


queries = open('queriesAndAssertions.csv').readlines()
qDict = {}

for line in queries:
    if line.split(',')[0] in qDict:
        qDict[line.split(',')[0]].append(int(line.split(',')[1].strip("\n")))
    else:
        qDict[line.split(',')[0]] = []
        qDict[line.split(',')[0]].append(int(line.split(',')[1].strip("\n")))

data = []
labels = []
for key in qDict:
    labels.append(key)
    data.append(qDict[key])
labels.reverse()
data.reverse()

fig = plt.figure()

#plt.xticks(fontsize=15)
plt.rcParams.update({'font.size': 15})


#plt.yticks(fontsize=15)


# Creating axes instance
ax = fig.add_subplot(111)


# Creating plot
bp = ax.boxplot(data, labels=labels, vert = 0)

ax.set_title('Median amount of assertions per query test target')
ax.set_ylabel('Query test targets', fontsize=15)
ax.set_xlabel('No. of assertions', fontsize=15)
ax.set_xscale('log')
# show plot
plt.show()

#Violin plot
"""import ssl
ssl._create_default_https_context = ssl._create_unverified_context

dataframe = pd.read_csv("queriesAndAssertions.csv")

queryType = dataframe.Query
assertions = dataframe.Assertions"""

"""testqueries = open('queriesAndAssertions.csv').readlines()
qDict = {}

for line in testqueries:
    if line.split(',')[0] in qDict:
        qDict[line.split(',')[0]].append(int(line.split(',')[1].strip("\n")))
    else:
        qDict[line.split(',')[0]] = []
        qDict[line.split(',')[0]].append(int(line.split(',')[1].strip("\n")))

data = []
labels = []
for key in qDict:
    labels.append(key)
    data.append(qDict[key])"""


"""colors_list = ['#78C850', '#F08030',  '#6890F0',  '#A8B820',  '#F8D030', '#E0C068', '#C03028', '#F85888', '#98D8D8']

# Creating plot
ax = sns.violinplot(y=queryType, x=assertions, palette=colors_list)

ax.set_title('Median amount of assertions per query type for generated tests')
ax.set_ylabel('Query types')
ax.set_xlabel('No. of assertions')

# show plot
plt.show()"""



#Histogram

# frequencies
"""testqueries = open('queriesAndAssertions.csv').readlines()
ytot = []
for line in testqueries:
    ytot.append(line.split(',')[0])

sns.set_theme(font_scale=1.5)
sns.set_context(None, font_scale=1.5)
sns.set_style("white")
sns.histplot(y=ytot, color="#e535ab", shrink=0.8)

# x-axis label
plt.ylabel('Query test target')
# frequency label
plt.xlabel('No. of test cases')
# plot title
plt.title('The number of test cases for each query test target')
plt.xscale('log')

# function to show the plot
plt.show()"""

# Coverage plots
"""codeCoverageTotal = open('codeCoverageCumulativeResult.csv').readlines()
codeCoverageIndividual = open('codeCoverageIndividualResult.csv').readlines()
ytot = []
for line in codeCoverageTotal:
    ytot.append(float(line.split(',')[1].strip("\n"))*100)

yind = []
for line in codeCoverageIndividual:
    yind.append(float(line.split(',')[1].strip("\n"))*100)

x = list(range(1,len(ytot)+1))


plot = plt.plot(x, ytot, color="#e535ab", label="Cumulative")

bar = plt.bar(x, yind,color="#9c8dfb", label="Individual")

plt.xticks(fontsize=15)
plt.rcParams.update({'font.size': 15})

# naming the x axis
plt.xlabel('Priority', fontsize=15)
# naming the y axis
plt.ylabel('Coverage %', fontsize=15)
# giving a title to my graph
plt.title('Code coverage')

plt.yticks(np.arange(0,40,5), fontsize=15)
# show a legend on the plot
plt.legend(loc=7, title="Code coverage")


# function to show the plot
plt.show()"""


#  most prioritized plots
"""codeCoverageTotal = open('codeCoverageCumulativeResult.csv').readlines()
schemaCoverageTotal = open('totschemaCoveragePrio.csv').readlines()
stopclock = open('stopclock.csv').readlines()
codeCov = []
schema = []
timeY = []

i = 0
for line in schemaCoverageTotal:
    i+=1
    schema.append(float(line.split(',')[1].strip("\n")))
    if i == 200:
        break

j = 0
for line in codeCoverageTotal:
    j+=1
    codeCov.append(float(line.split(',')[1].strip("\n")))
    if j == 200:
        break

for line in stopclock:
    timeY.append(float(line.split(',')[1].strip("\n"))/60000)

x = list(range(1,201))

fig = plt.figure()
ax1 = fig.add_subplot(111)

ln1 = ax1.plot(x, schema, label="Schema coverage")
ln2 = ax1.plot(x, codeCov, label="Code coverage")



ax2 = ax1.twinx()
ax2.set_ylabel('Minutes')
ln3= ax2.plot(x, timeY, label="Run time", color='g')

# added these three lines
lns = ln1+ln2+ln3
labs = [l.get_label() for l in lns]
ax1.legend(lns, labs, loc=0)

# naming the x axis
ax1.set_xlabel('Priority')
# naming the y axis
ax1.set_ylabel('Coverage %')
# giving a title to my graph
plt.title('Code coverage and schema coverage')

# show a legend on the plot

fig.tight_layout()
# function to show the plot
plt.show()"""