package online.fredinfo.portfolio.services;

import online.fredinfo.portfolio.models.Tech;
import java.util.List;
import java.util.Optional;

public interface TechService {
    List<Tech> getAllTechs();
    Optional<Tech> getTechById(Long id);
    List<Tech> getTechsByName(String name);
    List<Tech> getTechsByProject(Long projectId);
    Tech createTech(Tech tech);
    Tech updateTech(Long id, Tech tech);
    void deleteTech(Long id);
} 