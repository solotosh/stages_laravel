import React from 'react';
import { 
  Code2, 
  Lightbulb, 
  PenTool, 
  Rocket, 
  Settings, 
  TestTube2
} from 'lucide-react';

const stages = [
  {
    icon: <Lightbulb className="w-8 h-8" />,
    title: "Planning & Analysis",
    description: "Requirements gathering, project scope definition, and initial planning phase",
    status: "Completed",
    color: "text-yellow-500"
  },
  {
    icon: <PenTool className="w-8 h-8" />,
    title: "Design",
    description: "UI/UX design, architecture planning, and prototype development",
    status: "Completed",
    color: "text-blue-500"
  },
  {
    icon: <Code2 className="w-8 h-8" />,
    title: "Development",
    description: "Core functionality implementation and feature development",
    status: "In Progress",
    color: "text-green-500"
  },
  {
    icon: <TestTube2 className="w-8 h-8" />,
    title: "Testing",
    description: "Quality assurance, bug fixing, and performance optimization",
    status: "Pending",
    color: "text-purple-500"
  },
  {
    icon: <Settings className="w-8 h-8" />,
    title: "Integration",
    description: "System integration, data migration, and final configurations",
    status: "Pending",
    color: "text-orange-500"
  },
  {
    icon: <Rocket className="w-8 h-8" />,
    title: "Deployment",
    description: "Production deployment and project launch",
    status: "Pending",
    color: "text-red-500"
  }
];

function App() {
  return (
    <div className="min-h-screen bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
      <div className="max-w-4xl mx-auto">
        <div className="text-center mb-16">
          <h1 className="text-4xl font-bold text-gray-900 mb-4">
            Project Development Timeline
          </h1>
          <p className="text-xl text-gray-600">
            Track our progress through each development stage
          </p>
        </div>

        <div className="space-y-8">
          {stages.map((stage, index) => (
            <div
              key={stage.title}
              className={`relative flex items-start ${
                index !== stages.length - 1 ? 'pb-8' : ''
              }`}
            >
              {index !== stages.length - 1 && (
                <div className="absolute top-14 left-6 -ml-px h-full w-0.5 bg-gray-200" />
              )}
              
              <div className={`relative flex items-center justify-center flex-shrink-0 w-12 h-12 rounded-full bg-white shadow-lg ${stage.color} border-2 border-current`}>
                {stage.icon}
              </div>
              
              <div className="ml-6 flex-1">
                <div className="flex items-center justify-between">
                  <h3 className="text-xl font-semibold text-gray-900">
                    {stage.title}
                  </h3>
                  <span className={`px-3 py-1 rounded-full text-sm font-medium ${
                    stage.status === 'Completed' ? 'bg-green-100 text-green-800' :
                    stage.status === 'In Progress' ? 'bg-blue-100 text-blue-800' :
                    'bg-gray-100 text-gray-800'
                  }`}>
                    {stage.status}
                  </span>
                </div>
                <p className="mt-2 text-gray-600">
                  {stage.description}
                </p>
                <div className="mt-4 bg-white rounded-lg p-4 shadow-sm border border-gray-100">
                  <div className="w-full bg-gray-200 rounded-full h-2.5">
                    <div 
                      className={`h-2.5 rounded-full ${
                        stage.status === 'Completed' ? 'bg-green-500 w-full' :
                        stage.status === 'In Progress' ? 'bg-blue-500 w-1/2' :
                        'w-0'
                      }`}
                    />
                  </div>
                </div>
              </div>
            </div>
          ))}
        </div>
      </div>
    </div>
  );
}

export default App;