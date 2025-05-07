package online.fredinfo.portfolio.domain.usecases.ProjectCRUD;

import online.fredinfo.portfolio.domain.entities.Project;
import online.fredinfo.portfolio.domain.entities.ProjectRepository;

public class SaveProjectUseCase {
    private final ProjectRepository projectRepository;

    public SaveProjectUseCase(ProjectRepository projectRepository) {
        this.projectRepository = projectRepository;
    }

    public ProjectRepository getProjectRepository() {
        return projectRepository;
    }

    public Project execute(Project project) {
        return projectRepository.save(project);
    }
}
