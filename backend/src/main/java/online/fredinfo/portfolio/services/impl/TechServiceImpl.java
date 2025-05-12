package online.fredinfo.portfolio.services.impl;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import online.fredinfo.portfolio.models.Tech;
import online.fredinfo.portfolio.repositories.TechRepository;
import online.fredinfo.portfolio.services.TechService;

import java.util.List;
import java.util.Optional;

@Service
public class TechServiceImpl implements TechService {

    @Autowired
    private TechRepository techRepository;

    @Override
    public List<Tech> getAllTechs() {
        return techRepository.findAll();
    }

    @Override
    public Optional<Tech> getTechById(Long id) {
        return techRepository.findById(id);
    }

    @Override
    public List<Tech> getTechsByName(String name) {
        return techRepository.findByNameContainingIgnoreCase(name);
    }

    @Override
    public List<Tech> getTechsByProject(Long projectId) {
        return techRepository.findByProjectsId(projectId);
    }

    @Override
    public Tech createTech(Tech tech) {
        return techRepository.save(tech);
    }

    @Override
    public Tech updateTech(Long id, Tech tech) {
        if (techRepository.existsById(id)) {
            tech.setId(id);
            return techRepository.save(tech);
        }
        return null;
    }

    @Override
    public void deleteTech(Long id) {
        techRepository.deleteById(id);
    }
} 