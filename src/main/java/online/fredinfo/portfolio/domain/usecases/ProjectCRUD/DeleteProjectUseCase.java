package online.fredinfo.portfolio.domain.usecases.ProjectCRUD;

import online.fredinfo.portfolio.domain.entities.Project;
import online.fredinfo.portfolio.domain.entities.ProjectRepository;

import java.util.UUID;

public class DeleteProjectUseCase {
    private final ProjectRepository projectRepository;

    public DeleteProjectUseCase(ProjectRepository projectRepository) {
        this.projectRepository = projectRepository;
    }

    public ProjectRepository getProjectRepository() {
        return projectRepository;
    }

    public void execute(UUID projectId) {
        projectRepository.deleteById(projectId);
    }

    public void execute(Project project) {
        projectRepository.delete(project);
    }
}
